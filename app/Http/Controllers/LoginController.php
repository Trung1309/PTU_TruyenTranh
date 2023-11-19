<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\AuthRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(AuthRequest $request)
    {

    }



    public function showForgot()
    {
        return view('forgot');
    }



    public function showRegisterForm()
    {
        return view('register');
    }
}
