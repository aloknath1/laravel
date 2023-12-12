<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $request->validate(
            [
            "user_name": 'required',
            "user_email": 'required|email',
            "user_password": 'required',
            "user_phone": 'required',
            "user_country": 'required'
        ]
    );
        echo "<pre>";
        print_r(($request)->all());
        echo "</pre>";
    }
}
