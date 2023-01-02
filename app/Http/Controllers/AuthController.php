<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\user;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class AuthController extends Controller
{
    // public function login(){
    //     return view('login');
    // }
    public function home()
    {
        return view('home');
    }
    // public function register()
    // {
    //     return view('register');
    // }

    public function profile()
    {
        $data = Auth::user();
        $categories = category::all();
        return view('profile', compact('data', 'categories'));
    }

    public function loginPage()
    {
        $categories = category::all();
        return view('login', compact('categories'));
    }

    public function login(Request $request)
    {
        $categories = category::all();

        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if ($request->remember) {
            Cookie::queue('email_cookie', $request->email, 120);
            Cookie::queue('password_cookie', $request->password, 120);
        }

        if (Auth::attempt($credentials, true)) {
            $usertype = Auth::user()->role;
            return view('welcome', compact('categories'));
        }
        return redirect()->back()->withErrors(['email' => 'Invalid Email or Password']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('/login');
    }

    public function registerPage()
    {
        $categories = category::all();
        return view('register', compact('categories'));
    }

    public function register(Request $request)
    {
        $categories = category::all();

        $validateCredentials = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'password_confirmation' => 'required|same:password',
            'gender' => 'required',
            'date' => 'required|date|before:today|after:1900-01-01',
            'country' => 'required',
        ]);

        $user = new user();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->gender = $request->gender;
        $user->DoB = $request->date;
        $user->country = $request->country;
        try {
            $user->save();
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['auth' => 'Email already exists']);
        }

        return redirect('/login', compact('categories'));
    }
}
