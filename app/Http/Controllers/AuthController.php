<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }


    public function auth(Request $request)
    {

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'senha' => ['required'],
        ]);

        $user = User::where('email', $credentials['email'])->first();

        if (!$user || !Hash::check($credentials['senha'], $user->senha)) {
            return redirect()->back()->withErrors('error', 'Credenciais inválidas');
        }

        Auth::login($user);

        $request->session()->regenerate();

        return redirect()->intended(route('info.index'));
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

}
