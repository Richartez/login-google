<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\GoogleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// --------------------------------------------------
// HOME
// Bienvenida para NO registrados
// Dashboard para registrados
// --------------------------------------------------
Route::get('/', function () {
    return auth()->check()
        ? redirect()->route('dashboard')
        : view('welcome');
})->name('home');

// --------------------------------------------------
// GOOGLE LOGIN (OAuth)
// ⚠️ NO llevan middleware auth
// --------------------------------------------------
Route::get('/auth/google/redirect', [GoogleController::class, 'redirect'])
    ->name('google.redirect');

Route::get('/auth/google/callback', [GoogleController::class, 'callback'])
    ->name('google.callback');

// --------------------------------------------------
// DASHBOARD (solo autenticados)
// --------------------------------------------------
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

// --------------------------------------------------
// PERFIL DE USUARIO (solo autenticados)
// --------------------------------------------------
Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');
});

// --------------------------------------------------
// RUTAS DE AUTH DE BREEZE
// (login, register, logout, reset, etc.)
// --------------------------------------------------
require __DIR__ . '/auth.php';
