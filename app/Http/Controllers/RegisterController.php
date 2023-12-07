<?php

namespace App\Http\Controllers;

use Hash;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view("register.index", [
            "title" => "Register",
            "active" => "register",
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'firstname' => 'required|min:3|max:255',
            'lastname' => 'required|min:3|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|max:255'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        $request->session()->flash('Success', 'Registration successful! Please Login');
        // Setelah menyimpan data, Anda dapat mengembalikan respons atau melakukan redirect
        return redirect('/login')->with('Success', 'Registration successful! Please Login');
    }
}
