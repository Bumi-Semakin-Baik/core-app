<?php

namespace App\Http\Controllers;

use App\Models\NewsArticle;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class NewsController extends Controller
{
    public function index(){
        return view ('admin.news.index');
}
    public function add(){
        return view ('admin.news.add');
}
    public function edit(){
    return view ('admin.news.edit');
}
public function store(Request $request)
    {
        // dd($request->all());
        $validatedData['id'] = Auth::user()->id;
        $validatedData = $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'content' => 'required',
            'image' => 'nullable',
            'author' => 'required',
        ]);

        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('images', 'public');
        }
        $image = $request->file('image')->store('image', 'public');
        NewsArticle::create([
            'title' =>$request->input('title'),
            'slug' =>$request->input('slug'),
            'content' =>$request->input('content'),
            'image' =>$image,
            'author' =>$request->input('author'),
        ]);
        return redirect()->route('news')
        ->with('success', 'News succesfully added');

        // return response()->json([
            //     'code' => 200,
            //     'message' => 'success',
        //     'data' => $validatedData
        // ]);
    }
}
