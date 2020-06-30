<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function index()
    {
        return view('welcome', ['fname' => request('fname'), 'lname' => request('lname')]);
    }
    public function register()
    {
        return view('register');
    }

    public function store()
    {
        return redirect()->route('welcome', ['fname' => request('fname'), 'lname' => request('lname')]);
    }

}
