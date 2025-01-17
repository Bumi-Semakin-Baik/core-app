<?php

namespace App\Http\Controllers\API;

use App\Models\Tree;
use Ramsey\Uuid\Uuid;
use App\Models\Voucher;
use App\Models\UserTree;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\UserCarbonOffset;
use App\Constants\ResponseMessage;
use App\Http\Controllers\API\APIBaseController;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\GetTransactionRequest;
use App\Http\Requests\TransactionAdoptRequest;
use App\Http\Requests\UseVoucherRequest;
use App\Services\Transaction\TransactionService;
use Midtrans\Config as MidtransConfig;

class TransactionController extends APIBaseController
{
    protected $transactionSvc;
    public function __construct(TransactionService $service)
    {
        $this->transactionSvc = $service;
    }

    public function index(GetTransactionRequest $request)
    {
        $user = auth('api')->user()->id;
        $page = $request->input('page', 1);
        $limit = $request->input('limit', 10);

        $transactions = Transaction::with(['tree_type', 'planting'])->where('user_id', $user)
            ->orderBy('created_at', 'desc')
            ->paginate($limit, ['*'], 'page', $page)->map(
                function ($transaction) {
                    // check type if planting_id is null
                    if ($transaction->planting_id == null) {
                        $transaction->type = 'adopt';
                    } else {
                        $transaction->type = 'planting';
                    }

                    // check detail 
                    if ($transaction->type == 'adopt') {
                        $detail = $transaction->tree_type->name;
                    } else {
                        $detail = $transaction->planting->name;
                    }

                    // show only id, type, code, detail, date, total, status
                    return [
                        'id' => $transaction->id,
                        'type' => $transaction->type,
                        'code' => $transaction->order_code,
                        'detail' => $detail,
                        'date' => $transaction->date,
                        'total' => $transaction->total,
                        'status' => $transaction->status,
                    ];
                }
            );

        return response()->json([
            'message' => ResponseMessage::SUCCESS_RETRIEVE,
            'data' => $transactions,
            // 'meta' => [
            //     'page' => $transactions->currentPage(),
            //     'limit' => (int) $transactions->perPage(),
            //     'total' => $transactions->total(),
            //     'total_page' => $transactions->lastPage(),
            // ]
        ]);
    }

    public function adopt(TransactionAdoptRequest $request)
    {
        $data = [
            'product_id' => $request->product_id,
            'product_name' => $request->product_name,
            'total' => $request->total,
        ];

        $do = $this->transactionSvc->doAdopt($data);
        if (!$do) {
            return response()->json([
                'message' => ResponseMessage::ERROR_SERVER
            ], 500);
        }

        $respond = [
            'token' => $this->transactionSvc->data['token'],
            'transaction' => [
                'id' => $this->transactionSvc->data['transaction']['id'],
                'code' => $this->transactionSvc->data['transaction']['order_code'],
                'date' => $this->transactionSvc->data['transaction']['date'],
                'total' => $this->transactionSvc->data['transaction']['grand_total'],
                'status' => $this->transactionSvc->data['transaction']['status'],
                'total_offset' => $this->transactionSvc->data['user_carbon_offset']['total_offset'],
            ],
        ];
        if (config('app.env') != 'production') {
            $respond['redirect_url'] = "https://app.sandbox.midtrans.com/snap/v2/vtweb/" . $respond['token'];
        }

        return response()->json([
            'message' => ResponseMessage::SUCCESS_CREATE,
            'data' => $respond,
        ]);
    }

    /**
     * Get Voucher By Code
     */
    public function redeem_code($code)
    {
        $voucher = Voucher::where('code', $code)->first();
        if (!$voucher) {
            return response()->json([
                "message" => ResponseMessage::ERROR_NOT_FOUND,
            ], 404);
        }

        return response()->json([
            "message" => ResponseMessage::SUCCESS_RETRIEVE,
            "data" => $voucher
        ]);
    }

    /**
     * User Redeem Voucher
     */
    public function use_voucher(UseVoucherRequest $request)
    {
        $voucher = Voucher::where('code', $request->voucher_code)->first();

        if (!$voucher) {
            return response()->json([
                "message" => ResponseMessage::ERROR_NOT_FOUND,
            ], 404);
        }

        //create object
        $tr = [
            'type' => $voucher->type,
            'total' => $voucher->value,
        ];

        if ($voucher->type == 'adopt') {
            $tr['product_id'] = $voucher->tree_id;
        } else {
            $tr['tree_id'] = $voucher->tree_id;
            $tr['product_id'] = $voucher->planting_id;
        }

        //convert $tr to object
        $tr = (object) $tr;

        $v = [
            'id' => $voucher->id,
            'code' => $voucher->code,
            'value' => $voucher->value,
        ];

        $this->_doTransactions($tr, $v);

        return response()->json([
            "message" => ResponseMessage::SUCCESS_CREATE,
        ]);
    }

    private function _doTransactions($request, $voucher = [], $payment = [])
    {
        $basic_price = 200000;
        $basic_offset = 1000;
        $user_id = auth('api')->user()->id;

        $uuid = Uuid::uuid4();

        // basic data
        $data = [
            'id' => $uuid->toString(),
            'order_code' => 'ORDER-' . date('YmdHis') . '-' . $user_id . '-' . rand(1000, 9999),
            'user_id' => $user_id,
            'date' => date('Y-m-d'),
            'total' => $request->total,
            'grand_total' => $request->total,
        ];

        // check $request type
        if ($request->type == 'adopt') {
            $data['tree_type_id'] = $request->product_id;
        }

        // check $request type
        if ($request->type == 'planting') {
            $data['tree_type_id'] = $request->tree_id;
            $data['planting_id'] = $request->product_id;
        }

        // check voucher
        if (count($voucher) != 0) {
            $data['voucher_id'] = $voucher['id'];
            $data['voucher_code'] = $voucher['code'];
            $data['voucher_value'] = $voucher['value'];
            $data['grand_total'] = 0;
            $data['payment_method'] = 'reedem_voucher';
            $data['status'] = 'completed';
        }

        // check payment
        if (count($payment) != 0) {
            $data['order_id'] = $payment['order_id'];
            $data['payment_method'] = $payment['payment_method'];
            $data['payment_detail'] = json_decode($payment['payment_detail']);
            $data['grand_total'] = $payment['gross_amount'];
        }


        // db transactions
        DB::beginTransaction();

        $tr = Transaction::create($data);
        // check insert transaction
        if (!$tr) {
            DB::rollBack();
            return response()->json([
                // get error from model
                "message" => 'Error when create transaction',
            ], 400);
        }

        $data_offset = [
            'user_id' => $user_id,
            'transaction_id' => $data['id'],
            'offset_date' => $tr->date,
            'total_offset' => ($tr->total / $basic_price) * $basic_offset
        ];

        $uco = UserCarbonOffset::create($data_offset);
        // check insert user carbon offset
        if (!$uco) {
            DB::rollBack();
            return response()->json([
                // get error from model
                "message" => 'Error when create user carbon offset',
            ], 400);
        }

        if ($request->type == 'adopt') {
            $ut = $this->_find_tree($data_offset['total_offset']);

            $userTrees = [];

            foreach ($ut as $u) {
                $userTrees = [
                    'user_id' => $user_id,
                    'tree_id' => $u['tree_id'],
                    'transaction_id' => $data['id'],
                    'date_adopted' => $tr->date,
                    'user_tree_sequestration' => $u['user_tree_sequestration'],
                ];
            }

            $iut = UserTree::create($userTrees);

            // check insert user tree
            if (!$iut) {
                DB::rollBack();
                return response()->json([
                    // get error from model
                    "message" => 'Error when create user tree',
                ], 400);
            }
        }

        DB::commit();

        return $data;
    }

    private function _find_tree($offset)
    {
        return Tree::findTree($offset);
    }
}
