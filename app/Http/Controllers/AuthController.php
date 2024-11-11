<?php

namespace App\Http\Controllers;
use App\Model\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showloginForm () {
        return view('index');
    }

    public function login(Request $request) {

        // Validate the form data
        $request->validate([
            'email' =>'required|email',
            'password' => 'required|min:8'
        ]);

        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials)){
            return redirect()->intended('/dashboard'); // Redirect to the intended route or home page
        }

        return back()->with('message', 'Gagal Login'); // Return an error message if login fails
    }

    public function logout() {
        auth()->logout();
        return redirect()->route('showloginform'); // Redirect to the login page
    }
}
