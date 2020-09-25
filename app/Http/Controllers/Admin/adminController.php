<?php

namespace App\Http\Controllers\admin;

use App\Post;
use App\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;

class adminController extends Controller
{
    //
    public function index()
    {
        return view('admin.dashboard', [
            'users' => User::all()->count(),
            'posts' => Post::all()->count(),
            'roles' => Role::all()->count(),
            'permissions' => Permission::all()->count(),
        ]);
    }
}
