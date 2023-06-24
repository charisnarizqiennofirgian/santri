<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // return view('dashboard/index');
        // if (auth()->user()->role == 'admin') {
        //     return view('dashboard/index');
        // } else {
        //     return view('/after_register');
        // }
        if (auth()->user()->roles->first()->name == 'Admin') {
            return view('admin.dashboard');
        } elseif (auth()->user()->roles->first()->name == 'User') {
            return view('pendaftar.dashboard.index');
        } else {
            return view('/');
        }
    }
}
