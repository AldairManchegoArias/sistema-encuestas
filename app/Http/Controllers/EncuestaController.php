<?php

namespace App\Http\Controllers;

use App\Models\Encuesta;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Str;

class EncuestaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): JsonResponse
    {
        $query = Encuesta::with(['empresa', 'preguntas.opciones']);
        
        // Filtrar por empresa si se especifica
        if ($request->has('empresa_id')) {
            $query->where('empresa_id', $request->empresa_id);
        }
        
        // Filtrar por estado si se especifica
        if ($request->has('estado')) {
            $query->where('estado', $request->estado);
        }
        
        $encuestas = $query->get();
        
        return response()->json([
            'success' => true,
            'data' => $encuestas,
            'message' => 'Encuestas obtenidas exitosamente'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'empresa_id' => 'required|exists:empresas,empresa_id',
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'fecha_inicio' => 'nullable|date',
            'fecha_fin' => 'nullable|date|after:fecha_inicio',
            'estado' => 'required|in:borrador,activo,finalizado,pausado',
        ]);

        // Generar URLs automáticamente
        $slug = Str::slug($validated['titulo']);
        $validated['url_larga'] = "https://encuestas.ejemplo.com/{$slug}-" . time();
        $validated['url_corta'] = "https://bit.ly/" . Str::random(8);
        $validated['qr_code'] = "qr_code_{$slug}.png";
        
        $encuesta = Encuesta::create($validated);
        $encuesta->load(['empresa', 'preguntas']);
        
        return response()->json([
            'success' => true,
            'data' => $encuesta,
            'message' => 'Encuesta creada exitosamente'
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): JsonResponse
    {
        $encuesta = Encuesta::with([
            'empresa', 
            'preguntas.opciones', 
            'respuestas.personaExterna',
            'respuestas.detalles'
        ])->findOrFail($id);
        
        return response()->json([
            'success' => true,
            'data' => $encuesta,
            'message' => 'Encuesta obtenida exitosamente'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): JsonResponse
    {
        $encuesta = Encuesta::findOrFail($id);
        
        $validated = $request->validate([
            'titulo' => 'sometimes|string|max:255',
            'descripcion' => 'sometimes|string',
            'fecha_inicio' => 'sometimes|nullable|date',
            'fecha_fin' => 'sometimes|nullable|date|after:fecha_inicio',
            'estado' => 'sometimes|in:borrador,activo,finalizado,pausado',
        ]);
        
        $encuesta->update($validated);
        $encuesta->load(['empresa', 'preguntas']);
        
        return response()->json([
            'success' => true,
            'data' => $encuesta,
            'message' => 'Encuesta actualizada exitosamente'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): JsonResponse
    {
        $encuesta = Encuesta::findOrFail($id);
        $encuesta->delete();
        
        return response()->json([
            'success' => true,
            'message' => 'Encuesta eliminada exitosamente'
        ]);
    }

    /**
     * Obtener estadísticas de una encuesta
     */
    public function estadisticas(string $id): JsonResponse
    {
        $encuesta = Encuesta::with(['respuestas', 'preguntas.opciones'])->findOrFail($id);
        
        $totalRespuestas = $encuesta->respuestas->count();
        $preguntasCount = $encuesta->preguntas->count();
        
        $estadisticas = [
            'total_respuestas' => $totalRespuestas,
            'total_preguntas' => $preguntasCount,
            'estado' => $encuesta->estado,
            'fecha_inicio' => $encuesta->fecha_inicio,
            'fecha_fin' => $encuesta->fecha_fin,
            'respuestas_por_medio' => $encuesta->respuestas->groupBy('medio')->map->count(),
        ];
        
        return response()->json([
            'success' => true,
            'data' => $estadisticas,
            'message' => 'Estadísticas obtenidas exitosamente'
        ]);
    }
}
