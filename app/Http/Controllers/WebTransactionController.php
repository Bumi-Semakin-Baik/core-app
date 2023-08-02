<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\WebTransaction;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;

class WebTransactionController extends Controller
{

    public function checkout(Request $request){
        // $order = WebTransaction::create($request->all());
        $order = array(
            'name' => $request->name,
            'email' => $request->email,
            'idDonate' => $request->idDonate,
            'idUkm' => $request->idUkm,
            'totalPrice' => $request->total_price
        );

        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = env('MIDTRANS_SERVER_KEY');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => "DONATE-" . date('YmdHis') . "-" . $request->idDonate . "-" . rand(1, 9999),
                'gross_amount' => $request->total_price,
            ),
            'customer_details' => array(
                'first_name' => $request->name,
                'email' => $request->email,
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);
        return view('landing.donate.checkout',compact('snapToken', 'order'));
    }

    public function running($id){
        $id = Crypt::decryptString($id);

         // Set your Merchant Server Key
         \Midtrans\Config::$serverKey = env('MIDTRANS_SERVER_KEY');
         // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
         \Midtrans\Config::$isProduction = false;
         // Set sanitization on (default)
         \Midtrans\Config::$isSanitized = true;
         // Set 3DS transaction for credit card to true
         \Midtrans\Config::$is3ds = true;


        $data['donate'] = Transaction::where('order_code', $id)->first();
        $data['status'] = \Midtrans\Transaction::status($id);
        
        return view('landing.donate.donate-payment-running', $data);
    }

    public function saveTransaction(Request $request){
        $transaction['id'] = (string) Str::uuid();
        $transaction['type'] = "donate";
        $transaction['name'] = $request->name;
        $transaction['email'] = $request->email;
        $transaction['donate_id'] = $request->donateId;
        $transaction['date'] = date("Y-m-d");
        $transaction['total'] = $request->totalPrice;
        $transaction['grand_total'] = $request->totalPrice;
        $transaction['payment_method'] = $request->methodType; 
        $transaction['order_code'] = $request->orderCode;
        $transaction['method_type'] = $request->methodType;
        $transaction['status'] = $request->status;
        
        $transExist = Transaction::where('order_code', $request->orderCode)->first();
        if(!$transExist){
            Transaction::create($transaction);
        }else{
            Transaction::where('id', $transExist->id)->update($transaction);
        }

        return Crypt::encryptString($request->orderCode);
    }

    public function getStatus(Request $req){
        $transaction = Transaction::find($req->id);
        return $transaction->status;
    }
}
