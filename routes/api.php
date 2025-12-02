<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\EncuestaController;
use App\Http\Controllers\PreguntaController;
use App\Http\Controllers\RespuestaController;
use App\Http\Controllers\PersonaAutorizadaController;
use App\Http\Controllers\EncuestaPublicaController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Rutas públicas de autenticación
Route::prefix('auth')->group(function () {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
});

// Rutas públicas para testing (sin autenticación)
Route::prefix('test')->group(function () {
    Route::get('/empresas', [EmpresaController::class, 'index']);
    Route::get('/empresas/{id}', [EmpresaController::class, 'show']);
});

// Rutas públicas para encuestas (sin autenticación)
Route::prefix('public')->group(function () {
    Route::get('/encuesta/{identificador}', [EncuestaPublicaController::class, 'obtenerEncuesta']);
    Route::post('/encuesta/{encuestaId}/respuesta', [EncuestaPublicaController::class, 'enviarRespuesta']);
    Route::post('/encuesta/{encuestaId}/verificar-respuesta', [EncuestaPublicaController::class, 'verificarRespuesta']);
});

// Rutas protegidas (requieren autenticación)
Route::middleware('auth:sanctum')->group(function () {
    
    // Rutas de autenticación
    Route::prefix('auth')->group(function () {
        Route::post('/logout', [AuthController::class, 'logout']);
        Route::get('/me', [AuthController::class, 'me']);
        Route::post('/refresh', [AuthController::class, 'refresh']);
    });

    // Rutas de empresas
    Route::apiResource('empresas', EmpresaController::class);

    // Rutas de personas autorizadas
    Route::apiResource('personas-autorizadas', PersonaAutorizadaController::class);
    Route::patch('personas-autorizadas/{id}/estado', [PersonaAutorizadaController::class, 'cambiarEstado']);

    // Rutas de encuestas
    Route::apiResource('encuestas', EncuestaController::class);
    Route::get('encuestas/{id}/estadisticas', [EncuestaController::class, 'estadisticas']);

    // Rutas de preguntas
    Route::apiResource('preguntas', PreguntaController::class);
    Route::post('preguntas/reordenar', [PreguntaController::class, 'reordenar']);

    // Rutas de respuestas
    Route::apiResource('respuestas', RespuestaController::class)->only(['index', 'show', 'destroy']);
    Route::get('respuestas/encuesta/{encuestaId}/analizar', [RespuestaController::class, 'analizarPorEncuesta']);
    Route::get('respuestas/encuesta/{encuestaId}/exportar', [RespuestaController::class, 'exportar']);
    Route::get('respuestas/encuesta/{encuestaId}/estadisticas', [RespuestaController::class, 'estadisticasGenerales']);

    // Rutas específicas por empresa
    Route::prefix('empresas/{empresaId}')->group(function () {
        Route::get('/encuestas', [EncuestaController::class, 'index']);
        Route::get('/personas-autorizadas', [PersonaAutorizadaController::class, 'index']);
    });

    // Rutas específicas por encuesta
    Route::prefix('encuestas/{encuestaId}')->group(function () {
        Route::get('/preguntas', [PreguntaController::class, 'index']);
        Route::get('/respuestas', [RespuestaController::class, 'index']);
    });
});

// Ruta para obtener información del usuario autenticado
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});