<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        return view('login');
    }
    public function home(){
        return view('home');
    }
    public function register(){
        return view('register');
    }

    public function handleLogin(Request $request){
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if(Auth::attempt($credentials)){
            return redirect('/');
        }
        return redirect()->back();
    }
}
