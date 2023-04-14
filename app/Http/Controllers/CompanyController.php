<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function getAccount(){
        return view('admin.company.account.index');
    }
    public function getProject(){
        return view('admin.company.project.index');
    }
}
