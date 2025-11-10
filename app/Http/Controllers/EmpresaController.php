<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        $empresas = Empresa::with(['personasAutorizadas', 'encuestas'])->get();
        
        return response()->json([
            'success' => true,
            'data' => $empresas,
            'message' => 'Empresas obtenidas exitosamente'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'direccion' => 'required|string|max:255',
            'telefono' => 'required|string|max:255',
            'email' => 'required|email|unique:empresas,email',
            'estado' => 'required|in:activo,inactivo',
        ]);

        $validated['fecha_creacion'] = now();
        
        $empresa = Empresa::create($validated);
        
        return response()->json([
            'success' => true,
            'data' => $empresa,
            'message' => 'Empresa creada exitosamente'
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): JsonResponse
    {
        $empresa = Empresa::with(['personasAutorizadas', 'encuestas.preguntas'])
                          ->findOrFail($id);
        
        return response()->json([
            'success' => true,
            'data' => $empresa,
            'message' => 'Empresa obtenida exitosamente'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): JsonResponse
    {
        $empresa = Empresa::findOrFail($id);
        
        $validated = $request->validate([
            'nombre' => 'sometimes|string|max:255',
            'direccion' => 'sometimes|string|max:255',
            'telefono' => 'sometimes|string|max:255',
            'email' => 'sometimes|email|unique:empresas,email,' . $empresa->empresa_id . ',empresa_id',
            'estado' => 'sometimes|in:activo,inactivo',
        ]);
        
        $empresa->update($validated);
        
        return response()->json([
            'success' => true,
            'data' => $empresa,
            'message' => 'Empresa actualizada exitosamente'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): JsonResponse
    {
        $empresa = Empresa::findOrFail($id);
        $empresa->delete();
        
        return response()->json([
            'success' => true,
            'message' => 'Empresa eliminada exitosamente'
        ]);
    }
}
