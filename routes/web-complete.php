<?php

use Illuminate\Support\Facades\Route;

// Home route - Landing page
Route::get('/', function () {
    return view('home');
})->name('home');

// Authentication routes
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', function () {
    // Validación simple para demo
    $email = request('email');
    $password = request('password');
    
    if ($email === 'amanchego@poligran.edu.co' && $password === '123456') {
        session(['user' => ['email' => $email, 'name' => 'Aldair Manchego']]);
        return redirect()->route('dashboard-new');
    }
    
    return back()->withErrors(['email' => 'Credenciales inválidas']);
})->name('login.post');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::post('/register', function () {
    // Validación básica
    request()->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'password' => 'required|min:6',
    ]);
    
    // Registro exitoso - por ahora solo redirigir al login
    return redirect()->route('login')->with('success', 'Cuenta creada exitosamente');
})->name('register.post');

Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->name('forgot-password');

Route::post('/forgot-password', function () {
    request()->validate(['email' => 'required|email']);
    return back()->with('status', 'Enlace de recuperación enviado a tu email');
})->name('forgot-password.post');

Route::get('/reset-password', function () {
    return view('auth.reset-password');
})->name('reset-password');

// Logout route
Route::post('/logout', function () {
    session()->forget('user');
    return redirect()->route('home');
})->name('logout');

// Protected routes
Route::get('/dashboard', function () {
    if (!session('user')) {
        return redirect()->route('login');
    }
    return view('dashboard-new');
})->name('dashboard');

// Ruta específica para el nuevo dashboard
Route::get('/dashboard-new', function () {
    if (!session('user')) {
        return redirect()->route('login');
    }
    return view('dashboard-new');
})->name('dashboard-new');

Route::get('/survey-recipients/{survey_id}', function ($survey_id) {
    if (!session('user')) {
        return redirect()->route('login');
    }
    return view('survey-recipients', compact('survey_id'));
})->name('survey-recipients');

Route::get('/reports', function () {
    if (!session('user')) {
        return redirect()->route('login');
    }
    return view('reports');
})->name('reports');