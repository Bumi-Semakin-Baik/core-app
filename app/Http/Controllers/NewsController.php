<?php

namespace App\Http\Controllers;

use App\Models\NewsArticle;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Validator;


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
        $validatedData = Validator::make($request->all(), [
            'title' => 'required',
            'slug' => 'required',
            'content' => 'nullable',
            'image' => 'nullable|mimes:jpg,jpeg,png,bmp|max:1024',
            'author' => 'required',
            'is_publish' => 'nullable|boolean:0,1,true,false'
        ]);

        if ($validatedData->fails()) {
            return back()->withErrors([
                'image' => 'Image is more than 1 mb',
            ])->onlyInput('image');
        } else {
            $image = $request->file('image')->store('images/newsletter', 'public');
        // $image->move(public_path('images').$image);


        NewsArticle::create([
            'title' =>$request->input('title'),
            'slug' =>$request->input('slug'),
            'content' =>$request->input('body'),
            'image' =>$image,
            'author' =>$request->input('author'),
            'is_publish' => $request->input('type'),
        ]);

        return redirect()->route('news')
        ->with('success','news successfully added');
        }

        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('images/newsletter', 'public');
        }
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
            'is_publish' => 'nullable|boolean: 0, 1, true, false'
        ]);
    //    dd($validatedData);

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
