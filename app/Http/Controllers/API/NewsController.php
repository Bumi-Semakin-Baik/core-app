<?php

namespace App\Http\Controllers\API;

use App\Constants\ResponseMessage;
use App\Models\NewsArticle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    /**
     * Get List of News
     */

    public function index()
    {
        $news = NewsArticle::select(['id', 'title', 'slug', 'image', 'created_at'])->where('is_publish', 1)->get();
        foreach ($news as $key => $value) {
            $news[$key]->views = 1;
            $news[$key]->image = asset("storage/" . $value->image);
        }

        return response()->json([
            'message' => ResponseMessage::SUCCESS_RETRIEVE,
            'data' => $news,
        ]);
    }

    public function detail($id)
    {
        $news = NewsArticle::findOrFail($id);
        $news->views = 1;
        return response()->json([
            'message' => ResponseMessage::SUCCESS_RETRIEVE,
            'data' => $news,
        ]);
    }
}
