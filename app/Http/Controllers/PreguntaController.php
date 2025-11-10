<?php

namespace App\Http\Controllers;

use App\Models\Pregunta;
use App\Models\OpcionRespuesta;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;

class PreguntaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): JsonResponse
    {
        $query = Pregunta::with(['encuesta', 'opciones']);
        
        // Filtrar por encuesta si se especifica
        if ($request->has('encuesta_id')) {
            $query->where('encuesta_id', $request->encuesta_id);
        }
        
        $preguntas = $query->orderBy('orden')->get();
        
        return response()->json([
            'success' => true,
            'data' => $preguntas,
            'message' => 'Preguntas obtenidas exitosamente'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'encuesta_id' => 'required|exists:encuestas,encuesta_id',
            'tipo' => 'required|in:opcion_multiple,texto_libre,checkbox,escala',
            'texto_pregunta' => 'required|string',
            'obligatoria' => 'boolean',
            'orden' => 'required|integer|min:1',
            'opciones' => 'array',
            'opciones.*.texto_opcion' => 'required_with:opciones|string',
            'opciones.*.valor' => 'required_with:opciones|integer',
        ]);

        DB::beginTransaction();
        try {
            $pregunta = Pregunta::create([
                'encuesta_id' => $validated['encuesta_id'],
                'tipo' => $validated['tipo'],
                'texto_pregunta' => $validated['texto_pregunta'],
                'obligatoria' => $validated['obligatoria'] ?? false,
                'orden' => $validated['orden'],
            ]);

            // Crear opciones si las hay
            if (isset($validated['opciones']) && count($validated['opciones']) > 0) {
                foreach ($validated['opciones'] as $opcionData) {
                    OpcionRespuesta::create([
                        'pregunta_id' => $pregunta->pregunta_id,
                        'texto_opcion' => $opcionData['texto_opcion'],
                        'valor' => $opcionData['valor'],
                    ]);
                }
            }

            $pregunta->load('opciones');
            DB::commit();

            return response()->json([
                'success' => true,
                'data' => $pregunta,
                'message' => 'Pregunta creada exitosamente'
            ], 201);

        } catch (\Exception $e) {
            DB::rollback();
            return response()->json([
                'success' => false,
                'message' => 'Error al crear la pregunta: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): JsonResponse
    {
        $pregunta = Pregunta::with(['encuesta', 'opciones', 'respuestasDetalle'])
                           ->findOrFail($id);
        
        return response()->json([
            'success' => true,
            'data' => $pregunta,
            'message' => 'Pregunta obtenida exitosamente'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): JsonResponse
    {
        $pregunta = Pregunta::findOrFail($id);
        
        $validated = $request->validate([
            'tipo' => 'sometimes|in:opcion_multiple,texto_libre,checkbox,escala',
            'texto_pregunta' => 'sometimes|string',
            'obligatoria' => 'sometimes|boolean',
            'orden' => 'sometimes|integer|min:1',
            'opciones' => 'sometimes|array',
            'opciones.*.opcion_id' => 'sometimes|exists:opciones_respuesta,opcion_id',
            'opciones.*.texto_opcion' => 'required_with:opciones|string',
            'opciones.*.valor' => 'required_with:opciones|integer',
        ]);

        DB::beginTransaction();
        try {
            $pregunta->update($validated);

            // Actualizar opciones si se proporcionan
            if (isset($validated['opciones'])) {
                // Eliminar opciones existentes
                $pregunta->opciones()->delete();
                
                // Crear nuevas opciones
                foreach ($validated['opciones'] as $opcionData) {
                    OpcionRespuesta::create([
                        'pregunta_id' => $pregunta->pregunta_id,
                        'texto_opcion' => $opcionData['texto_opcion'],
                        'valor' => $opcionData['valor'],
                    ]);
                }
            }

            $pregunta->load('opciones');
            DB::commit();

            return response()->json([
                'success' => true,
                'data' => $pregunta,
                'message' => 'Pregunta actualizada exitosamente'
            ]);

        } catch (\Exception $e) {
            DB::rollback();
            return response()->json([
                'success' => false,
                'message' => 'Error al actualizar la pregunta: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): JsonResponse
    {
        $pregunta = Pregunta::findOrFail($id);
        $pregunta->delete();
        
        return response()->json([
            'success' => true,
            'message' => 'Pregunta eliminada exitosamente'
        ]);
    }

    /**
     * Reordenar preguntas de una encuesta
     */
    public function reordenar(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'preguntas' => 'required|array',
            'preguntas.*.pregunta_id' => 'required|exists:preguntas,pregunta_id',
            'preguntas.*.orden' => 'required|integer|min:1',
        ]);

        DB::beginTransaction();
        try {
            foreach ($validated['preguntas'] as $preguntaData) {
                Pregunta::where('pregunta_id', $preguntaData['pregunta_id'])
                       ->update(['orden' => $preguntaData['orden']]);
            }

            DB::commit();

            return response()->json([
                'success' => true,
                'message' => 'Preguntas reordenadas exitosamente'
            ]);

        } catch (\Exception $e) {
            DB::rollback();
            return response()->json([
                'success' => false,
                'message' => 'Error al reordenar las preguntas: ' . $e->getMessage()
            ], 500);
        }
    }
}
