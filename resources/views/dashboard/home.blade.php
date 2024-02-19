@extends('layouts.auth')

Aqui será o dashboard {{auth()->user()->nome}}

<a href="{{ route('auth.logout')}}">Logout</a>