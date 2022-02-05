<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        $data = ['title' => env('APP_NAME'), 'page' => 'Login'];
        return view('auth.login', $data);
    }
    public function register()
    {
        $data = ['title' => env('APP_NAME'), 'page' => 'Register'];
        return view('auth.register', $data);
    }
}
