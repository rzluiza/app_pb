<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }


    public function auth(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/');
        }
        
        return redirect()->route('auth.login')->with('error', 'Credenciais inválidas');
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/login');
    }

    public function restrito(Request $request)
    {
        return view("restrito");
    }
    public function dashboard(Request $request)
    {
        return view("dashboard.home");
    }
}
