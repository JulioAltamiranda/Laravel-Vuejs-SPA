<?php

namespace App\Http\Controllers\admin;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PostsImagesController extends Controller
{
    //
    public function index(Post $post)
    {
        
        return view('admin.posts.images', compact('post'));
    }
    public function store(Post $post)
    {
        $url=request('image')->store('posts','public');
        $post->images()->create([
            'name' => Storage::url($url)
        ]);
    }
}
