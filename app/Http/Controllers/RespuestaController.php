<?php

namespace App\Http\Controllers;

use App\Models\Respuesta;
use App\Models\RespuestaDetalle;
use App\Models\Encuesta;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;

class RespuestaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): JsonResponse
    {
        $query = Respuesta::with(['encuesta', 'personaExterna', 'detalles.pregunta', 'detalles.opcion']);
        
        // Filtrar por encuesta si se especifica
        if ($request->has('encuesta_id')) {
            $query->where('encuesta_id', $request->encuesta_id);
        }
        
        // Filtrar por fechas
        if ($request->has('fecha_inicio')) {
            $query->whereDate('fecha_respuesta', '>=', $request->fecha_inicio);
        }
        
        if ($request->has('fecha_fin')) {
            $query->whereDate('fecha_respuesta', '<=', $request->fecha_fin);
        }
        
        // Filtrar por medio
        if ($request->has('medio')) {
            $query->where('medio', $request->medio);
        }
        
        $respuestas = $query->orderBy('fecha_respuesta', 'desc')->get();
        
        return response()->json([
            'success' => true,
            'data' => $respuestas,
            'message' => 'Respuestas obtenidas exitosamente'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): JsonResponse
    {
        $respuesta = Respuesta::with([
            'encuesta.empresa',
            'personaExterna',
            'detalles.pregunta',
            'detalles.opcion'
        ])->findOrFail($id);
        
        return response()->json([
            'success' => true,
            'data' => $respuesta,
            'message' => 'Respuesta obtenida exitosamente'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): JsonResponse
    {
        $respuesta = Respuesta::findOrFail($id);
        $respuesta->delete();
        
        return response()->json([
            'success' => true,
            'message' => 'Respuesta eliminada exitosamente'
        ]);
    }

    /**
     * Obtener análisis y estadísticas de respuestas por encuesta
     */
    public function analizarPorEncuesta(string $encuestaId): JsonResponse
    {
        $encuesta = Encuesta::with([
            'preguntas.opciones',
            'respuestas.detalles.opcion'
        ])->findOrFail($encuestaId);
        
        $totalRespuestas = $encuesta->respuestas->count();
        $analisis = [];
        
        foreach ($encuesta->preguntas as $pregunta) {
            $preguntaAnalisis = [
                'pregunta_id' => $pregunta->pregunta_id,
                'texto_pregunta' => $pregunta->texto_pregunta,
                'tipo' => $pregunta->tipo,
                'total_respuestas' => 0,
                'opciones' => []
            ];
            
            // Contar respuestas por opción
            if ($pregunta->tipo === 'opcion_multiple' || $pregunta->tipo === 'checkbox') {
                foreach ($pregunta->opciones as $opcion) {
                    $count = RespuestaDetalle::where('pregunta_id', $pregunta->pregunta_id)
                                           ->where('opcion_id', $opcion->opcion_id)
                                           ->count();
                    
                    $preguntaAnalisis['opciones'][] = [
                        'opcion_id' => $opcion->opcion_id,
                        'texto_opcion' => $opcion->texto_opcion,
                        'valor' => $opcion->valor,
                        'count' => $count,
                        'porcentaje' => $totalRespuestas > 0 ? round(($count / $totalRespuestas) * 100, 2) : 0
                    ];
                }
            }
            
            // Para texto libre, obtener ejemplos de respuestas
            if ($pregunta->tipo === 'texto_libre') {
                $respuestasTexto = RespuestaDetalle::where('pregunta_id', $pregunta->pregunta_id)
                                                 ->whereNotNull('respuesta_texto')
                                                 ->pluck('respuesta_texto')
                                                 ->take(10);
                
                $preguntaAnalisis['respuestas_texto'] = $respuestasTexto;
            }
            
            $preguntaAnalisis['total_respuestas'] = RespuestaDetalle::where('pregunta_id', $pregunta->pregunta_id)->count();
            $analisis[] = $preguntaAnalisis;
        }
        
        return response()->json([
            'success' => true,
            'data' => [
                'encuesta' => [
                    'encuesta_id' => $encuesta->encuesta_id,
                    'titulo' => $encuesta->titulo,
                    'total_respuestas' => $totalRespuestas
                ],
                'analisis_preguntas' => $analisis
            ],
            'message' => 'Análisis obtenido exitosamente'
        ]);
    }

    /**
     * Exportar respuestas en formato específico
     */
    public function exportar(Request $request, string $encuestaId): JsonResponse
    {
        $validated = $request->validate([
            'formato' => 'required|in:json,csv',
            'incluir_detalles' => 'boolean'
        ]);
        
        $query = Respuesta::where('encuesta_id', $encuestaId)
                         ->with(['personaExterna', 'encuesta']);
        
        if ($validated['incluir_detalles'] ?? true) {
            $query->with(['detalles.pregunta', 'detalles.opcion']);
        }
        
        $respuestas = $query->get();
        
        if ($validated['formato'] === 'csv') {
            // Preparar datos para CSV
            $csvData = [];
            $headers = ['ID Respuesta', 'Fecha', 'Nombre', 'Email', 'Teléfono', 'Medio'];
            
            // Agregar headers de preguntas si se incluyen detalles
            if ($validated['incluir_detalles'] ?? true) {
                $preguntas = $respuestas->first()?->encuesta->preguntas ?? [];
                foreach ($preguntas as $pregunta) {
                    $headers[] = $pregunta->texto_pregunta;
                }
            }
            
            $csvData[] = $headers;
            
            foreach ($respuestas as $respuesta) {
                $row = [
                    $respuesta->respuesta_id,
                    $respuesta->fecha_respuesta->format('Y-m-d H:i:s'),
                    $respuesta->personaExterna->nombre,
                    $respuesta->personaExterna->email,
                    $respuesta->personaExterna->telefono,
                    $respuesta->medio
                ];
                
                // Agregar respuestas a preguntas
                if ($validated['incluir_detalles'] ?? true) {
                    foreach ($respuesta->detalles as $detalle) {
                        $row[] = $detalle->opcion?->texto_opcion ?? $detalle->respuesta_texto;
                    }
                }
                
                $csvData[] = $row;
            }
            
            return response()->json([
                'success' => true,
                'data' => $csvData,
                'formato' => 'csv',
                'message' => 'Datos exportados exitosamente'
            ]);
        }
        
        return response()->json([
            'success' => true,
            'data' => $respuestas,
            'formato' => 'json',
            'message' => 'Datos exportados exitosamente'
        ]);
    }

    /**
     * Obtener estadísticas generales de respuestas
     */
    public function estadisticasGenerales(string $encuestaId): JsonResponse
    {
        $encuesta = Encuesta::with('respuestas')->findOrFail($encuestaId);
        
        $estadisticas = [
            'total_respuestas' => $encuesta->respuestas->count(),
            'respuestas_por_dia' => $encuesta->respuestas
                ->groupBy(function($respuesta) {
                    return $respuesta->fecha_respuesta->format('Y-m-d');
                })
                ->map->count(),
            'respuestas_por_medio' => $encuesta->respuestas
                ->groupBy('medio')
                ->map->count(),
            'primera_respuesta' => $encuesta->respuestas->min('fecha_respuesta'),
            'ultima_respuesta' => $encuesta->respuestas->max('fecha_respuesta'),
        ];
        
        return response()->json([
            'success' => true,
            'data' => $estadisticas,
            'message' => 'Estadísticas obtenidas exitosamente'
        ]);
    }
}
