<?php

namespace App\Http\Controllers;

use DB;
use App\Models\NewsArticle;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class NewsController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
}

    public function index(){
        return view ('admin.news.index', [
            'news' => NewsArticle::get('*'),
        ]);
}
    public function add(){
        return view ('admin.news.add');
}
    public function edit($id){
        $data = NewsArticle::whereId($id)->first();
        // dd($data);
        return view ('admin.news.edit',[
            'news' => $data,
        ]);
}
public function store(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'content' => 'nullable',
            'image' => 'nullable',
            'author' => 'required',
        ]);

        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('images', 'public');
        }

        $image = $request->file('image')->store('images', 'public');
        $content = $request->input('body');

        NewsArticle::create([
            'title' =>$request->input('title'),
            'slug' =>$request->input('slug'),
            'content' => $content,
            'image' =>$image,
            'author' =>$request->input('author'),
        ]);
        return redirect()->route('news')
        ->with('success', 'News succesfully added');
    }


    public function update(Request $request, $id)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'content' => 'required',
            'image' => 'nullable',
            'author' => 'required',
        ]);

        $test = NewsArticle::where('id', $id)
        ->update($validatedData);


        return redirect()->route('news')
        ->with('success', 'Data Berhasil diupdate');

    }
    public function destroy($id)
    {

        $data = NewsArticle::where('id', $id)->first();
        // dd($product);
        if ($data == null) {
            return redirect()->route('news');
        }

        $data->delete();

        return redirect()->route('news');
    }


}
