@extends('layouts.guest')
<form action="{{ route('auth.auth') }}" method="POST" class="text-black">
    @csrf
    <div class="mb-4">
        <label for="email" class="block text-sm font-medium mb-1">Email</label>
        <input class="w-full p-2 border border-gray-300 rounded-md" type="email" id="email" name="email" required>
    </div>

    <div class="mb-6">
        <label for="senha" class="block text-sm font-medium  mb-1">Senha</label>
        <input class="w-full p-2 border border-gray-300 rounded-md" type="password" id="senha" name="senha" required>
    </div>

    <div class="flex space-x-2 mt-4">
        <button type="submit" class="text-white bg-purple-700 hover:bg-purple-800 focus:outline-none focus:ring-4 focus:ring-purple-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mb-2">Entrar</button>

        <a class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-full border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 ">Registrar</a>
    </div>

    @if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
</form>