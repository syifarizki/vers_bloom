<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view("login.index", [
            "tittle" => "Login",
            "active" => "login",
        ]);
    }

    public function authenticate(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Tambahan logika untuk pengarahan ke dashboard jika is_admin adalah 1
            if (Auth::user()->is_admin == 1) {
                return redirect()->route('dashboard'); // Ganti 'dashboard' dengan nama rute yang sesuai
            }

            return redirect()->intended('/');
        }

        return back()->with('loginError', 'Login Failed!');
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}