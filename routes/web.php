<?php

use App\Http\Controllers\Auth\CustomAuthController;
use App\Http\Controllers\Gallery;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::middleware(['auth'])->group(function () {
    Route::get('/rezervari', function () {
        return view('rezervari');
    })->name('rezervari');
});

Route::get('/register', [CustomAuthController::class, 'register'])->name('register');
Route::get('/gallery', [Gallery::class, 'render'])->name('gallery');
Route::post('/register', [CustomAuthController::class, 'customRegistration']);
Route::get('/login', [CustomAuthController::class, 'index'])->name('login');;
Route::post('/login', [CustomAuthController::class, 'customLogin']);
Route::get('/logout', [CustomAuthController::class, 'signOut'])->name('logout');
