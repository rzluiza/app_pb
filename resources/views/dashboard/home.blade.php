@extends('layouts.auth')

@section('content')
    Aqui será o dashboard {{ auth()->user()->nome }}

    <ul>
        @foreach ($info as $infos)
            <li>{{ $infos->titulo }}</li>
        @endforeach
    </ul>

    <a href="{{ route('auth.logout') }}">Logout</a>
@endsection