<?php

use Illuminate\Support\Facades\Route;

// Web Routes - Frontend
Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('web.login');

Route::post('/login', function () {
    return redirect()->back()->withErrors(['email' => 'Invalid credentials']);
})->name('web.login.post');