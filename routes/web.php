<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('auth/login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Rutas de publicaciones
    Route::resource('post', PostController::class);

    // Rutas del administrador (aquí también se incluye la autenticación)
    Route::middleware('admin')->group(function (){
        Route::get('/admin', [AdminController::class,'index'])->name('admin.index');
        Route::resource('users', UserController::class)->except(['show']);
    });
});


require __DIR__.'/auth.php';
