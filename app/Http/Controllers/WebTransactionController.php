<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WebTransaction;
use Illuminate\Support\Facades\Crypt;

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
        \Midtrans\Config::$isProduction = true;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => "DONATE-" . date('YmdHis') . "-" . $request->idDonate . "-" . $request->idUkm,
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

    public function running(){
        return view('landing.donate.donate-payment-running');
    }

    public function saveTransaction(Request $request){
        $transaction['name'] = $request->name;
        $transaction['email'] = $request->email;
        $transaction['total_price'] = $request->totalPrice;
        $transaction['order_code'] = $request->orderCode;
        $transaction['status'] = $request->status;
        $transaction['method_type'] = $request->methodType;
        
        $transExist = WebTransaction::where('order_code', $request->orderCode)->first();
        if(!$transExist){
            WebTransaction::create($transaction);
        }else{
            WebTransaction::where('id', $transExist->id)->update($transaction);
        }

        return Crypt::encryptString($request->orderCode);
    }
}
