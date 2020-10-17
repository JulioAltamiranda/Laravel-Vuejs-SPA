<?php

namespace App\Http\Controllers\admin;

use App\Tag;
use App\Post;
use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\SavePostRequest;
use Illuminate\Support\Facades\Storage;

class PostsController extends Controller
{
    //
    public function index()
    {
        if(auth()->user()->hasRole('admin') || auth()->user()->hasPermissionTo('posts.index')){
            $posts=Post::all();
        }else{
            $posts = Post::whereUserId(auth()->user()->id)->with(['category:id,name', 'user:id,name'])->get();
        }
        
        return view('admin.posts.index', compact('posts'));
    }
    public function create()
    {
        $this->authorize('create',new Post);
        return view('admin.posts.create', ['categories' => Category::all(), 'tags' => Tag::all()]);
    }
    public function store(SavePostRequest $request)
    {
        $this->authorize('create',new Post);
        $tags = [];
        if($request->tags){
            foreach ($request->tags as $tag) {
                $tags[] = Tag::find($tag) ? $tag : Tag::create(['name' => $tag])->id;
            }
        }
        
        $post = Post::create($request->all());
        $post->tags()->sync($tags);
        $post->user_id = auth()->user()->id;
        $post->save();
        return redirect()->route('admin.posts.create')->with('status', 'Se ha creado un post');
    }
    public function edit(Post $post)
    {
        $this->authorize('update',$post);
        return view('admin.posts.edit', [
            'post' => $post,
            'categories' => Category::all(),
            'tags' => Tag::all()
        ]);
    }
    public function update(SavePostRequest $request, Post $post)
    {
        $this->authorize('update',$post);
        
        $tags = [];
        if($request->tags){
           foreach ($request->tags as $tag) {
               $tags[] = Tag::find($tag) ? $tag : Tag::create(['name' => $tag])->id;
           }
        }
        $post->update($request->all());
        $post->tags()->sync($tags);
        return redirect()->route('admin.posts.edit', $post)->with('status', 'Se ha guardado un post');
    }
    public function destroy(Post $post)
    {
        $this->authorize('delete',$post);
        if($post->images){
            foreach($post->images as $image){

                $imageName=str_replace('storage','public',$image->name);
                Storage::delete($imageName);
            }
            $post->images()->delete();
        }
        $post->tags()->detach();
        $post->delete();
        return redirect()->route('admin.posts.index')->with('status', 'Se ha eliminado un post');
    }
}
