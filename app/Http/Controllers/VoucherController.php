<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VoucherWeb;
use Illuminate\Support\Facades\Validator;

class VoucherController extends Controller
{
    //
    public function index(){
        return view ('admin.voucher.index', [
            'vouchers' => VoucherWeb::get('*')
        ]);
    }

    public function add(){
        return view ('admin.voucher.add');
    }

    public function store(Request $request)
    {
        Validator::extend('without_spaces', function($attr, $value){

            return preg_match('/^\S*$/u', $value);

        });
        
        $validatedData = $request->validate([
            'code' => 'required|without_spaces',
            'nama_voucher' => 'required',
            'potongan' => 'required',
            'owner' => 'required'
        ]);


        VoucherWeb::create([
            'code' =>$request->input('code'),
            'nama_voucher' =>$request->input('nama_voucher'),
            'potongan' =>$request->input('potongan'),
            'owner' => $request->input('owner')
        ]);
        return redirect()->route('voucher')
        ->with('success', 'Voucher succesfully added');
    }

    public function destroy($id)
    {

        $data = VoucherWeb::where('id', $id)->first();
        if ($data == null) {
            return redirect()->route('voucher');
        }

        $data->delete();

        return redirect()->route('voucher');
    }


}
