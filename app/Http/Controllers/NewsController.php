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
    public function index(){
        return view ('admin.news.index', [
            'news' => NewsArticle::get('*')
        ]);
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

    public function check($id)
    {
        $user = User::find($id);
        return view('admin.news.index', compact('name'));

    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'content' => 'required',
            'image' => 'nullable',
            'author' => 'required',
        ]);

        $user = User::find($id);
        $user->title = $request->get('title');
        $user->slug = $request->get('slug');
        $user->title = $request->get('content');
        $user->slug = $request->get('image');
        $user->title = $request->get('author');
        $user->save();

        return redirect()->route('news')
                  ->with('success', 'updated successfully');

    }
}
