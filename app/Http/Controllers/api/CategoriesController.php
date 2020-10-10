<?php

namespace App\Http\Controllers\api;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{
    //
    public function index(){
        if(request()->ajax()){
            return Category::with('posts')->get();
        }
    }
    public function posts($id){
        return Category::find($id)->posts()->with(['category','user','tags','images'])->get();
    }
}
