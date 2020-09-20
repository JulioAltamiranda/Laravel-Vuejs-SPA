<?php

namespace App\Http\Controllers\admin;

use App\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use App\Http\Requests\SaveUserRequest;

class UsersController extends Controller
{
    //}
    public function index()
    {
        if (auth()->user()->hasRole('admin')) {

            $users = User::all();
        } else {
            $users = User::whereId(auth()->user()->id)->get();
        }
        return view('admin.users.index', compact('users'));
    }
    public function create()
    {
        return view('admin.users.create', ['roles' => Role::all()]);
    }
    public function edit(User $user)
    {
        $this->authorize('view', $user);
        return view('admin.users.edit', ['user' => $user, 'roles' => Role::all()]);
    }
    public function store(SaveUserRequest $request)
    {

        $user = User::create($request->validated());
        $user->assignRole($request->roles);
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect()->route('admin.users.create')->with('status', 'Se ha guardado un usuario');
    }

    public function update(SaveUserRequest $request, User $user)
    {
        $this->authorize('update', $user);
        if($user->hasRole('admin')){

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
        $this->authorize('delete', $user);
        $user->posts()->delete();
        $user->delete();
        return redirect()->route('admin.users')->with('status', 'Usuario eliminado');
    }
    // public function show(User $user){
    //     $this->authorize('view', $user);
    //     return view('admin.users.show',compact('user'));
    // }
    public function prueba(){
        return view('admin.prueba');
    }
}
