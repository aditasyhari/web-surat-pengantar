<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class authController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function postlogin(Request $request)
    {
        if (Auth::guard('admin')->attempt([ 'nama' => $request->nama, 'password' => $request->password ])) {
            return redirect()->route('dashboardAdmin');
        } else if (Auth::guard('user')->attempt([ 'nama' => $request->nama, 'password' => $request->password ])) {
            return redirect()->route('dashboardPengguna');;
        } else {
            return redirect()->route('login');
        }
    }

    public function logout()
    {
        if (Auth::guard('admin')->check()) {
            Auth::guard('admin')->logout();
        } else if (Auth::guard('user')->check()) {
                   Auth::guard('user')->logout();
        }
        return redirect()->route('login');
    }

    public function registerUser(Request $request)
    {

    }
}
