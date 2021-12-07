<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\User;
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

    public function register(Request $request)
    {
        return view('auth.register');
    }

    public function registerUser(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'alamat' => 'required',
            'no_whatsapp' => 'required|numeric',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator);
        }

        User::create([
            'level' => 'pengguna',
            'nama' => $request->nama,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'no_whatsapp' => $request->no_whatsapp,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login')->with('success', 'Berhasil mendaftar. Silahkan Login !');
    }

}
