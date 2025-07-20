<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;

Route::get('/', function () {
    return view('auth.register');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

// Dashboard (protected)
Route::get('/dashboard', [ProductController::class, 'index'])
    ->middleware(['auth'])
    ->name('dashboard');

// Cart routes
Route::post('/cart/add/{id}', [CartController::class, 'add'])
    ->middleware(['auth'])
    ->name('cart.add');

Route::get('/cart', [CartController::class, 'show'])
    ->middleware(['auth'])
    ->name('cart.show');

require __DIR__.'/auth.php';
