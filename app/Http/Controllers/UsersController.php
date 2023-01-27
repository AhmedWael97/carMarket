<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function __construct() {
        $this->middleware("auth");
        $this->middleware("permission:Users View",['only'=>['index']]);
        $this->middleware("permission:Users Create",['only'=>['create','store']]);
        $this->middleware("permission:Users Edit",['only'=>['edit','update']]);
        $this->middleware("permission:Users Delete",['only'=>['destroy']]);
    }

    public function index() {
        return view('backend.users.index')->with('users',User::get());
    }

    public function create() {
        return view('backend.users.create')->with('roles',Role::get());
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'role_id' => 'required',
        ]);

        $role = Role::findOrFail($request->role_id);
        $newUser = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'passowrd' => Hash::make($request->password),
        ]);
        $newUser->save();
        $newUser->assignRole($role);
        return redirect()->route('user-index')->with('success',translate('تم الحفظ بنجاح'));
    }

    public function edit($id) {
        $user = User::findOrFail($id);
        return view('backend.users.edit')->with([
            'user' => $user,
            'roles' => Role::get(),
        ]);
    }

    public function update(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',

            'role_id' => 'required',
        ]);

        $user = User::findOrFail($request->id);
        $role = Role::findOfFail($request->role_id);
        if(!User::where('email',$request->email)->where('id','!=',$request->id)->first()) {
            $user->name = $request->name;
            $user->email = $request->email;
            if($request->password != null) {
                $user->password = Hash::make($request->password);
            }
            $user->assignRole($role);
            return redirect()->route('user-index')->with('success',translate('تم الحفظ بنجاح'));

        } else {
            return back()->with('warning',translate('هذا البريد الالكتروني مسجل لمستخدم أخر'));
        }
    }

    public function destroy($id) {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('user-index')->with('success',translate('تم الحذف بنجاح'));
    }
}
