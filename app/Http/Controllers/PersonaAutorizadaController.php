<?php

namespace App\Http\Controllers;

use App\Models\PersonaAutorizada;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class PersonaAutorizadaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): JsonResponse
    {
        $query = PersonaAutorizada::with('empresa');
        
        // Filtrar por empresa si se especifica
        if ($request->has('empresa_id')) {
            $query->where('empresa_id', $request->empresa_id);
        }
        
        // Filtrar por rol si se especifica
        if ($request->has('rol')) {
            $query->where('rol', $request->rol);
        }
        
        // Filtrar por estado si se especifica
        if ($request->has('estado')) {
            $query->where('estado', $request->estado);
        }
        
        $personas = $query->get();
        
        return response()->json([
            'success' => true,
            'data' => $personas,
            'message' => 'Personas autorizadas obtenidas exitosamente'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): JsonResponse
    {
        // Verificar que el usuario autenticado sea administrador
        if (!$request->user()->esAdministrador()) {
            return response()->json([
                'success' => false,
                'message' => 'No tienes permisos para crear personas autorizadas'
            ], 403);
        }

        $validated = $request->validate([
            'empresa_id' => 'required|exists:empresas,empresa_id',
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'email' => 'required|email|unique:personas_autorizadas,email',
            'rol' => 'required|in:administrador,creador,analista',
        ]);

        $validated['estado'] = 'activo';
        $validated['fecha_registro'] = now();
        
        $persona = PersonaAutorizada::create($validated);
        $persona->load('empresa');
        
        return response()->json([
            'success' => true,
            'data' => $persona,
            'message' => 'Persona autorizada creada exitosamente'
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): JsonResponse
    {
        $persona = PersonaAutorizada::with('empresa')->findOrFail($id);
        
        return response()->json([
            'success' => true,
            'data' => $persona,
            'message' => 'Persona autorizada obtenida exitosamente'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): JsonResponse
    {
        $persona = PersonaAutorizada::findOrFail($id);
        
        // Verificar permisos: solo administradores o la misma persona
        if (!$request->user()->esAdministrador() && $request->user()->persona_id !== $persona->persona_id) {
            return response()->json([
                'success' => false,
                'message' => 'No tienes permisos para modificar esta persona'
            ], 403);
        }

        $validated = $request->validate([
            'nombre' => 'sometimes|string|max:255',
            'apellido' => 'sometimes|string|max:255',
            'email' => 'sometimes|email|unique:personas_autorizadas,email,' . $persona->persona_id . ',persona_id',
            'rol' => 'sometimes|in:administrador,creador,analista',
            'estado' => 'sometimes|in:activo,inactivo',
        ]);

        // Solo administradores pueden cambiar rol y estado
        if (!$request->user()->esAdministrador()) {
            unset($validated['rol'], $validated['estado']);
        }
        
        $persona->update($validated);
        $persona->load('empresa');
        
        return response()->json([
            'success' => true,
            'data' => $persona,
            'message' => 'Persona autorizada actualizada exitosamente'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): JsonResponse
    {
        $persona = PersonaAutorizada::findOrFail($id);
        
        // Verificar que el usuario autenticado sea administrador
        if (!request()->user()->esAdministrador()) {
            return response()->json([
                'success' => false,
                'message' => 'No tienes permisos para eliminar personas autorizadas'
            ], 403);
        }

        // No permitir que se elimine a sí mismo
        if (request()->user()->persona_id === $persona->persona_id) {
            return response()->json([
                'success' => false,
                'message' => 'No puedes eliminarte a ti mismo'
            ], 400);
        }
        
        $persona->delete();
        
        return response()->json([
            'success' => true,
            'message' => 'Persona autorizada eliminada exitosamente'
        ]);
    }

    /**
     * Cambiar estado de una persona autorizada
     */
    public function cambiarEstado(Request $request, string $id): JsonResponse
    {
        // Verificar que el usuario autenticado sea administrador
        if (!$request->user()->esAdministrador()) {
            return response()->json([
                'success' => false,
                'message' => 'No tienes permisos para cambiar el estado'
            ], 403);
        }

        $persona = PersonaAutorizada::findOrFail($id);
        
        $validated = $request->validate([
            'estado' => 'required|in:activo,inactivo'
        ]);
        
        $persona->update($validated);
        
        return response()->json([
            'success' => true,
            'data' => $persona,
            'message' => 'Estado actualizado exitosamente'
        ]);
    }
}
