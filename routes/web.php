<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;



Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
    Route::post('/login', [AuthController::class, 'auth'])->name('auth.auth');
    Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');
    Route::post('/cadastro', [RegisterController::class,'createUser'])->name('auth.registro');
    Route::get('/cadastro', [RegisterController::class,'create'])->name('auth.forms');

    //rota de não permissão
    Route::get('/nao-permitido', [AuthController::class, 'restrito'])->name('restrito');
});


Route::middleware('auth')->group(function () {
    Route::get('/', [AuthController::class,'dashboard'])->name('dashboard.home');
});

//rotas de administrador autenticado
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard', function () {
    });

    Route::get('/profile', function () {
    });
});
