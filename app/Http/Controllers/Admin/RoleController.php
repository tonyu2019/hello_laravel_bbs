<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends BaseController
{
    public function index(){
        $roles=Role::paginate(10);
        return view('admin.role.index', compact('roles'));
    }

    public function create(){
        $permissions=Permission::all();
        return view('admin.role.create', compact('permissions'));
    }

    public function store(Request $request, Role $role){
        $role->name=$request->name;
        $role->title=$request->title;
        $role->save();
        $role->permissions()->sync($request->permissions);
        return redirect()->route('roles.index')->with('success','添加角色成功');
    }

    public function edit(Role $role){
        $permissions=Permission::all();
        return view('admin.role.create', compact('role', 'permissions'));
    }

    public function update(Role $role, Request $request){
        $role->name=$request->name;
        $role->title=$request->title;
        $role->save();
        $role->permissions()->sync($request->permissions);
        return redirect()->route('roles.index')->with('success','修改角色成功');
    }

    public function destroy(Role $permission){
        $permission->delete();
        return redirect()->route('permissions.index')->with('success','删除权限成功');
    }
}
