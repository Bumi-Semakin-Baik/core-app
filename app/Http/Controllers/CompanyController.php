<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    //
    public function account(){
        return view('admin.company.account.index');
    }
    public function project(){
        return view('admin.company.project.index');
    }
}
