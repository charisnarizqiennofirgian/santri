<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SantriRegisterController extends Controller
{
    //
    public function register()
    {
        return view('pendaftar.auth.register');
    }

    public function login()
    {
        return view('pendaftar.auth.login');
    }
}
