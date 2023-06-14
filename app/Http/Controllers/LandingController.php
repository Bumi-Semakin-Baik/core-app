<?php

namespace App\Http\Controllers;

use App\Models\NewsArticle;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index(){

        return view ('landing.home.index', [
            'card_news' => NewsArticle::get('*')
                           ->where('is_publish', 1),
        ]);
    }

    public function detailNews($id){
        $news = NewsArticle::find($id);
        return view('landing.artikel.artikel', compact('news'));
    }
}
