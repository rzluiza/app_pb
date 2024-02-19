@extends('layouts.guest')

<form action="{{ route('auth.registro') }}" method="post">
    @csrf
    <div>
        <label for="nome">Nome:</label>
        <input class="border" type="text" id="nome" name="nome" required>
    </div>
    <div>
        <label for="email">Email:</label>
        <input class="border" type="email" id="email" name="email" required>
    </div>
    <div>
        <label for="username">Username:</label>
        <input class="border" type="text" id="username" name="username" required>
    </div>
    <div>
        <label for="departamento">Departamento:</label>
        <input class="border" type="text" id="departamento" name="departamento" required>
    </div>
    <div>
        <label for="senha">Senha:</label>
        <input class="border" type="password" id="senha" name="senha" required>
    </div>
    <button type="submit">Registrar</button>
</form>