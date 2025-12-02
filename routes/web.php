<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpresaController;

// Home route
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
        return redirect()->route('dashboard');
    }
    
    return back()->withErrors(['email' => 'Credenciales inválidas']);
})->name('login.post');

// Register routes
Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::post('/register', function () {
    // Aquí iría la lógica de registro real
    // Por ahora redirigimos a la página de verificación
    return redirect()->route('verify.email.show');
})->name('register.post');

Route::get('/verify-email', function () {
    return view('auth.verify-email');
})->name('verify.email.show');



// Rutas de recuperación de contraseña
Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->name('password.request');

Route::post('/forgot-password', function () {
    request()->validate(['email' => 'required|email']);
    
    // Aquí irá la lógica para enviar el email
    return back()->with('status', 'Password reset link sent to your email!');
})->name('password.email');

Route::get('/reset-password/{token}', function ($token) {
    $email = request()->email;
    return view('auth.reset-password', compact('token', 'email'));
})->name('password.reset');

Route::post('/reset-password', function () {
    request()->validate([
        'token' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:8|confirmed',
    ]);
    
    // Aquí irá la lógica para resetear la contraseña
    return redirect()->route('login')->with('success', 'Password has been reset successfully!');
})->name('password.update');

// Dashboard (requiere autenticación)
Route::get('/dashboard', function () {
    if (!session('user')) {
        return redirect()->route('login');
    }
    return view('dashboard');
})->name('dashboard');

// Survey Recipients (requiere autenticación)
Route::get('/survey/{id}/recipients', function ($id) {
    if (!session('user')) {
        return redirect()->route('login');
    }
    return view('survey-recipients', compact('id'));
})->name('survey.recipients');

// Reports (requiere autenticación)
Route::get('/reports', function () {
    if (!session('user')) {
        return redirect()->route('login');
    }
    return view('reports');
})->name('reports');

// Logout
Route::post('/logout', function () {
    session()->forget('user');
    return redirect()->route('home');
})->name('logout');

// Ruta simple para probar empresas desde el navegador
Route::get('/test/empresas', [EmpresaController::class, 'index']);
