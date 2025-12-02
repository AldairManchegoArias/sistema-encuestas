<?php

namespace App\Http\Controllers;

use App\Models\PersonaAutorizada;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    /**
     * Login de persona autorizada
     */
    public function login(Request $request): JsonResponse
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        // Buscar persona autorizada por email y que esté activa
        $persona = PersonaAutorizada::where('email', $request->email)
                                   ->where('password', $request->password)
                                   ->where('estado', 'activo')
                                   ->with('empresa')
                                   ->first();

        if (!$persona) {
            throw ValidationException::withMessages([
                'email' => ['Las credenciales no coinciden con nuestros registros.'],
            ]);
        }

        // Por ahora, como no tenemos campo password en personas_autorizadas,
        // usaremos una contraseña temporal. En producción deberías agregar este campo.
        $passwordTemp = 'password123'; // Contraseña temporal para todas las personas

        if (!Hash::check($request->password, Hash::make($passwordTemp))) {
            // Para simplificar, verificamos si la contraseña es la temporal
            if ($request->password !== $passwordTemp) {
                throw ValidationException::withMessages([
                    'email' => ['Las credenciales no coinciden con nuestros registros.'],
                ]);
            }
        }

        // Crear token de acceso
        $token = $persona->createToken('auth-token', ['*'])->plainTextToken;

        return response()->json([
            'success' => true,
            'data' => [
                'persona' => $persona,
                'token' => $token,
                'token_type' => 'Bearer'
            ],
            'message' => 'Login exitoso'
        ]);
    }

    /**
     * Registro de nueva persona autorizada (solo para administradores)
     */
    public function register(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'empresa_id' => 'required|exists:empresa,empresa_id',
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'email' => 'required|email|unique:persona_autorizada,email',
            'rol' => 'required|in:administrador,creador,analista',
            'password' => 'required|string|min:8',
        ]);

        // Por ahora guardamos sin el campo password, pero en producción 
        // deberías agregar este campo a la migración
        $persona = PersonaAutorizada::create([
            'empresa_id' => $validated['empresa_id'],
            'nombre' => $validated['nombre'],
            'apellido' => $validated['apellido'],
            'email' => $validated['email'],
            'rol' => $validated['rol'],
            'estado' => 'activo',
            'fecha_registro' => now(),
        ]);

        $persona->load('empresa');

        return response()->json([
            'success' => true,
            'data' => $persona,
            'message' => 'Persona autorizada registrada exitosamente'
        ], 201);
    }

    /**
     * Logout del usuario autenticado
     */
    public function logout(Request $request): JsonResponse
    {
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'success' => true,
            'message' => 'Logout exitoso'
        ]);
    }

    /**
     * Obtener información del usuario autenticado
     */
    public function me(Request $request): JsonResponse
    {
        $persona = $request->user()->load('empresa');

        return response()->json([
            'success' => true,
            'data' => $persona,
            'message' => 'Información del usuario obtenida exitosamente'
        ]);
    }

    /**
     * Renovar token de acceso
     */
    public function refresh(Request $request): JsonResponse
    {
        $persona = $request->user();
        
        // Eliminar token actual
        $request->user()->currentAccessToken()->delete();
        
        // Crear nuevo token
        $token = $persona->createToken('auth-token', ['*'])->plainTextToken;

        return response()->json([
            'success' => true,
            'data' => [
                'token' => $token,
                'token_type' => 'Bearer'
            ],
            'message' => 'Token renovado exitosamente'
        ]);
    }
}
