<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function getLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        if ($request->username == 'admin' && $request->password == 'admin') {
            return view('welcome_admin');
        }

        return view('login_error');
    }
}
