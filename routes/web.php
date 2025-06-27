<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Rutas para el administrador
Route::get('/admin', [App\Http\Controllers\Admin::class, 'index'])->name('admin.index')->middleware('auth');
// La autenticación de middleware lo que hace es que no se puede acceder a la ruta a menos que se esté logueado, y si te logueás te redirige automáticamente a donde querías entrar

// Rutas para el administrador - usuarios
Route::get('/admin/usuarios', [App\Http\Controllers\Usuario::class, 'index'])->name('admin.usuarios.index')->middleware('auth');