<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function dashboard()
    {
        return view('dashboard');
    }

    public function calendarioCitas()
    {
        return view('calendario-citas');
    }

    public function login()
    {
        if (auth()->check()) {
            return redirect()->route('dashboard');
        }
        return view('login');
    }

    public function signout()
    {
        auth()->logout();
        return redirect()->route('login');
    }

    public function newPatient()
    {
        return view('new-patient');
    }
}
