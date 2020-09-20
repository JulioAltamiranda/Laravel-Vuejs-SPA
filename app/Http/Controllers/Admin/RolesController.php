<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;

class RolesController extends Controller
{
    //
    public function index()
    {
        return view('admin.roles.index', ['roles' => Role::all()]);
    }
    public function create()
    {
        return view('admin.roles.create', ['permissions' => Permission::all()]);
    }
    public function edit(Role $role)
    {

        return view('admin.roles.edit', ['role' => $role, 'permissions' => Permission::all()]);
    }
    public function store(Request $request, Role $role)
    {

        $data = $this->validate($request, [
            'name' => 'required|max:255|string|unique:roles',
            'display_name' => 'required|max:255|string',
            'permissions'=> 'required'
        ]);
        $role = Role::create($data);

        $role->givePermissionTo([
            $request->permissions
        ]);
        return redirect()->route('admin.roles.create')->with('status', 'Se ha guardado un role');
    }
    public function show(Role $role){
        return view('admin.roles.show',compact('role'));
    }
    public function update(Request $request, Role $role)
    {
        
        $data = $this->validate($request, [
            'name' => 'required|max:255|string',
            'display_name' => 'required|max:255|string',
            'permissions'=> 'required'
        ]);
        $role->update($data);
        $role->permissions()->detach();
            if($request->permissions){
                $role->givePermissionTo([
                    $request->permissions
                ]);

            }
        return redirect()->route('admin.roles.edit',$role)->with('status', 'Se ha guardado un role');
    }
    public function destroy(Role $role)
    {
        $role->delete();
        return redirect()->route('admin.roles')->with('status','Se ha eliminado un role');
    }
}
