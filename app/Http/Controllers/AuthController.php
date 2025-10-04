<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login() {
        return view('login');
    }

    public function doLogin(Request $request) {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($request->only('username', 'password'))) {
            $user = Auth::user();
            if ($user->role == 'admin') {
                return redirect('/admin');
            } elseif ($user->role == 'siswa') {
                return redirect('/siswa');
            } elseif ($user->role == 'kepala-sekolah') {
                return redirect('/kepala-sekolah');
            } elseif ($user->role == 'waka-kesiswaan') {
                return redirect('/waka-kesiswaan');
            } elseif ($user->role == 'waka-kurikulum') {
                return redirect('/waka-kurikulum');
            } elseif ($user->role == 'BK') {
                return redirect('/bk');
            } elseif ($user->role == 'tata-usaha') {
                return redirect('/tata-usaha');
            }
        } else {
            return redirect()->back()->with('loginError', 'Username atau Password anda salah!');
        }
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('login');
    }
}
