<?php

namespace App\Http\Controllers\admin;

use App\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use App\Http\Requests\SaveUserRequest;
use Illuminate\Support\Facades\Storage;

class UsersController extends Controller
{
    //}
    public function index()
    {
        if (auth()->user()->hasRole('admin') || auth()->user()->can('users.index')) {
            
            $users = User::all();
        } else {

            $users = User::whereId(auth()->user()->id)->get();
        }

        return view('admin.users.index', compact('users'));
    }
    public function create()
    {
        $this->authorize('create',new User);
        return view('admin.users.create', ['roles' => Role::all()]);
    }
    public function edit(User $user)
    {
        $this->authorize('update',$user);
        return view('admin.users.edit', ['user' => $user, 'roles' => Role::all()]);
    }
    public function store(SaveUserRequest $request)
    {
        $this->authorize('create',new User);
        $user = User::create($request->validated());
        $user->assignRole($request->roles);
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect()->route('admin.users.create')->with('status', 'Se ha guardado un usuario');
    }

    public function update(SaveUserRequest $request, User $user)
    {
        $this->authorize('update',$user);
        if($request->roles){

            $user->roles()->detach();
            $user->assignRole($request->roles);
        }
        $user->update($request->validated());
        if ($request->password) {

            $user->password = bcrypt($request->password);
            $user->save();
        }
        return redirect()->route('admin.users.edit',$user)->with('status', 'Se ha guardado un usuario');
    }
    public function destroy(User $user)
    {
        $this->authorize('delete',$user);
        //removing tags from posts
        foreach($user->posts as $post){
            
            $post->tags()->detach();
            
        }
        //removing images from posts
        foreach($user->posts as $post){
            if($post->images){
                
                foreach($post->images as $image){
                    $imageName=str_replace('storage','public',$image->name);
                    Storage::delete($imageName);
                }
                $post->images()->delete();
            }
        }
        //removing posts from user
        $user->posts()->delete();
        $user->delete();
        return redirect()->route('admin.users.index')->with('status', 'Usuario eliminado');
    }

}
