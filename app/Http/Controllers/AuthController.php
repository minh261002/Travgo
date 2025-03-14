<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('client.auth.login');
    }

    public function register()
    {
        return view('client.auth.register');
    }

    public function forgotPassword()
    {
        return view('client.auth.forgot-password');
    }

    public function facebookLogin()
    {
        return redirect()->route('home');
    }

    public function googleLogin()
    {
        return redirect()->route('home');
    }
}
