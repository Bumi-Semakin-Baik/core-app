<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\WebTransaction;
use App\Models\EmailUser;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


class WebTransactionController extends Controller
{

    public function checkout(Request $request){
        $orderCode = "DONATE-" . date('YmdHis') . "-" . $request->idDonate . "-" . rand(1, 9999);

        $transaction['id'] = (string) Str::uuid();
        $transaction['type'] = "donate";
        $transaction['name'] = $request->name;
        $transaction['email'] = $request->email;
        $transaction['donate_id'] = $request->idDonate;
        $transaction['date'] = date("Y-m-d");
        $transaction['total'] = $request->total_price;
        $transaction['grand_total'] = $request->total_price;
        $transaction['order_code'] = $orderCode;
        $transaction['status'] = "request";
        Transaction::create($transaction);
        EmailUser::create([
                'email' => $transaction['email'],
                'name' => $transaction['name'],
        ]);
        $transaction['enc_order_code'] = Crypt::encryptString($orderCode);

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
                'order_id' => $orderCode,
                'gross_amount' => $request->total_price,
            ),
            'customer_details' => array(
                'first_name' => $request->name,
                'email' => $request->email,
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);
        $mail = new PHPMailer(true);
        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'write email here';                     //SMTP username
            $mail->Password   = 'write password here';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('write email here', 'BumiBaik');
            $mail->addAddress($request->email);

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Donasi anda telah berhasil masuk';
            $mail->Body    = 'Terima kasih donasi anda telah berhasil terkumpulkan. Anda akan mendapatkan email dari detail kegiatan ini.';

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
        return view('landing.donate.checkout',compact('snapToken', 'transaction'));
    }

    public function running($id){
        $id = Crypt::decryptString($id);
        $data['donate'] = Transaction::where('order_code', $id)->first();
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
