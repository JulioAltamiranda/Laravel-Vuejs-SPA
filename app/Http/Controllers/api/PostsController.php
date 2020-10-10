<?php

namespace App\Http\Controllers\api;

use App\Post;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    //
    public function index(Request $request){
        if($request->ajax()){
            return Post::with(['category:id,name','tags:name','images','user'])->latest()->get();
        }
    }
    public function show(Request $request,$id){
        if($request->ajax()){
            return Post::with(['category:id,name','tags:name','images','user'])->find($id);
        }
        
    }
    public function latest(Request $request){
        if($request->ajax()){
            return Post::select(['id','title'])->latest()->take(5)->get();
        }
    }
    public function authors(Request $request){
        if($request->ajax()){
            return User::with('posts')->get();
        }
    }
}
