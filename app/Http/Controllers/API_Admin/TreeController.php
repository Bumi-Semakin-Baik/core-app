<?php

namespace App\Http\Controllers\API_Admin;

use App\Constants\ResponseMessage;
use App\Http\Controllers\Controller;
use App\Http\Requests\TreeCreateRequest;
use App\Models\Tree;
use Illuminate\Http\Request;

class TreeController extends Controller
{
    public function create_tree(TreeCreateRequest $req){
        Tree::create([
            'type_id'       => $req->input('tree_type'),
            'code'          => $req->input('code'),
            'description'   => $req->input('description'),
            'planting_date' => $req->input('planting_date'),
            'image'         => $req->input('image'),
            'longitude'     => $req->input('longitude'),
            'latitude'      => $req->input('latitude')
        ]);
        
        return response()->json([
            'message'   => ResponseMessage::SUCCESS_CREATE
        ], 201);
    }
}
