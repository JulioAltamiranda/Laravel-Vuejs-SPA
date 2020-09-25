<?php

namespace App\Http\Controllers\admin;

use App\Post;
use App\Image;
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
    public function destroy(Image $image){
        $imageName=str_replace('storage','public',$image->name);
        Storage::delete($imageName);
        $image->delete();
        return redirect()->route('admin.posts')->with('status','Se ha eliminado una foto');
    }
}
