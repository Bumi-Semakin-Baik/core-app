<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function viewLogin(){
        return view('admin.auth.login');
    }
    public function viewRegister(){
        return view('admin.auth.register');
    }
}
