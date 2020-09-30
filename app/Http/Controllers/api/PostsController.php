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
    public function show($id){
        return Post::with(['category:id,name','tags:name','images','user'])->find($id);
    }
    public function latest(){
        return Post::select(['id','title'])->latest()->take(5)->get();
    }
    public function authors(){
        return User::with('posts')->get();
    }
}
