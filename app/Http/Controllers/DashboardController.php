<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class DashboardController extends Controller
{
    public function index (Request $request) {
        if(Auth::check()) {
            $user = auth()->user();
            $user->last_login_ip = $request->ip();
            $user->last_login_time = Date("d-m-Y h:i A");
            $user->save();
            return view('backend.index');
        } else {
            return view('auth.login');
        }

    }

    public function login() {
        return view('auth.login');
    }

    public function logout() {
        if(Auth::check()) {
            Auth::logout();
            return redirect()->route('custom-login');
        } else {
            abort(404);
        }
    }
}
