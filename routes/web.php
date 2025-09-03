<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Rutas para el administrador
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index')->middleware('auth');
// La autenticación de middleware lo que hace es que no se puede acceder a la ruta a menos que se esté logueado, y si te logueás te redirige automáticamente a donde querías entrar

// Rutas para el administrador - usuarios
Route::get('/admin/usuarios', [App\Http\Controllers\UserController::class, 'index'])->name('admin.usuarios.index')->middleware('auth');

Route::get('/admin/usuarios/create', [App\Http\Controllers\UserController::class, 'create'])->name('admin.usuarios.create')->middleware('auth');

Route::post('/admin/usuarios/create', [App\Http\Controllers\UserController::class, 'store'])->name('admin.usuarios.store')->middleware('auth');

Route::get('/admin/usuarios/{id}', [App\Http\Controllers\UserController::class, 'show'])->name('admin.usuarios.show')->middleware('auth');

Route::get('/admin/usuarios/{id}/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('admin.usuarios.edit')->middleware('auth');

Route::put('/admin/usuarios/{id}', [App\Http\Controllers\UserController::class, 'update'])->name('admin.usuarios.update')->middleware('auth');

Route::get('/admin/usuarios/{id}/confirm-delete', [App\Http\Controllers\UserController::class, 'confirmDelete'])->name('admin.usuarios.confirm-delete')->middleware('auth');

Route::delete('/admin/usuarios/{id}', [App\Http\Controllers\UserController::class, 'destroy'])->name('admin.usuarios.destroy')->middleware('auth');