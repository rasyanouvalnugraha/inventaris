<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showloginForm () {
        return view('index');
    }

    // public function login(Request $req) {
    //     $req->validate([
    //         'name' => 'required|max:255',
    //         'password' => 'required|max:255',
    //     ]);

    //     $credentials = $req->only('name', 'password');

    //     if (auth()->attempt($credentials)) {
    //         return view ('/dashboard');
    //     } else {
    //         return back()->withErrors([
    //             'login' => 'Gagal Login'
    //         ]);
    //     }
    // }

    public function logout() {
        auth()->logout();
        return redirect()->route('showloginForm'); 
    }
}
