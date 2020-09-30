<?php

namespace App\Http\Controllers\api;

use App\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TagsController extends Controller
{
    //
    public function index(){
        return Tag::with('posts')->get();
    }
    public function posts($id){
        return Tag::find($id)->posts()->with(['category','user','tags','images'])->get();
    }
}
