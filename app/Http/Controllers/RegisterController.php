<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{


    public function create()
    {
        return view('auth.register');
    }
    public function createUser(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'email' => 'required|email|unique:users',
            'username' => 'required',
            'departamento' => 'required',
            'senha' => 'required|min:8',

        ]);

        $user = User::create([
            'nome'=> $request->nome,
            'email'=> $request->email,
            'username'=> $request->username,
            'departamento'=> $request->departamento,
            'sobre_mim'=> '',
            'senha'=> bcrypt($request->senha),
        ]);
        return redirect('/login');
    }
}
