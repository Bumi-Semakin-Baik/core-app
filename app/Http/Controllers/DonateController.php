<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonateController extends Controller
{
     //
    public function index(){
        return view ('landing.donate.donate');
    }
    
    public function detail($id){
        return view ('landing.donate.donate-detail');
    }

    public function payment($id){
        return view ('landing.donate.donate-payment');
    }
}
