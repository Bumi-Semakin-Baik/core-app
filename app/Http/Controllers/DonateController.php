<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donation;
use Illuminate\Support\Facades\DB;

class DonateController extends Controller
{
     //
    public function index(){
        return view('landing.donate.donate',[
            'donations' => DB::table('donations')
                                    ->select('*')
                                    ->where('status','=','Enabled')
                                    ->where('is_published','=','Yes')
                                    ->get()
        ]);
    }

    public function detail($id){
        $donations  = Donation::find($id);
        return view('landing.donate.donate-detail', compact('donations'));
    }

    public function payment($id){
        $donations  = Donation::find($id);
        return view('landing.donate.donate-payment', compact('donations'));
    }
}
