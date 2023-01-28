<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    public function __construct() {
        $this->middleware("auth");
        $this->middleware("permission:Role View",['only'=>['index']]);
        $this->middleware("permission:Role Create",['only'=>['create','store']]);
        $this->middleware("permission:Role Edit",['only'=>['edit','update']]);
        $this->middleware("permission:Role Delete",['only'=>['destroy']]);
    }

    public function index() {
        return view('backend.roles.index')->with('roles' , Role::get());
    }

    public function create() {
        return view('backend.roles.create')->with('permissions', Permission::get());
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required| unique:roles',
        ]);

        if(isset($request->permissions) && count($request->permissions)>= 1) {
            $Role = Role::create(['name' => $request->name]);
            $Permissions = Permission::whereIn('id',$request->permissions)->get();
            $Role->syncPermissions($Permissions);
            return redirect()->route('role-index')->with('success',translate("تم الحفظ بنجاح"));
        } else {
            return back()->with('warning', translate("إختر بعض من الصلاحيات"));
        }
    }

    public function edit($id) {
        $role = Role::findOrFail($id);
        return view('backend.roles.edit')->with([
            'role' => $role,
            'permissions' => Permission::get(),
        ]);
    }
    public function update(Request $request) {
        $request->validate([
            'name' => 'required',
        ]);

        if(isset($request->permissions) && count($request->permissions)>= 1) {
            $Role = Role::findOrFail($request->id);
            $Role->name = $request->name;
            $Role->save();
            $Permissions = Permission::whereIn('id',$request->permissions)->get();
            $Role->syncPermissions($Permissions);
            return redirect()->route('role-index')->with('success',translate("تم الحفظ بنجاح"));
        } else {
            return back()->with('warning', translate("إختر بعض من الصلاحيات"));
        }
    }

    public function destroy($id) {
        $role = Role::findOrFail($id);
        $role->delete();
        return redirect()->route('role-index')->with('success',translate("تم الحفظ بنجاح"));
    }

}
