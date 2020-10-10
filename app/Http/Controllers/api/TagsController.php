<?php

namespace App\Http\Controllers\api;

use App\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TagsController extends Controller
{
    //
    public function index(Request $request){
        if($request->ajax()){
            return Tag::with('posts')->get();
        }
    }
    public function posts($id,Request $request){
        if($request->ajax()){
            return Tag::find($id)->posts()->with(['category','user','tags','images'])->get();
        }
    }
}
