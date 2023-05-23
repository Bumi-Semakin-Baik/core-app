<?php

namespace App\Http\Controllers;

use App\Models\NewsArticle;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index(){
        $posts = NewsArticle::where('is_publish', 1)->get();
        return view ('landing.home.index');
    }}
