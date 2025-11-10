<?php

namespace App\Http\Controllers;

use App\Models\Encuesta;
use App\Models\PersonaExterna;
use App\Models\Respuesta;
use App\Models\RespuestaDetalle;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;

class EncuestaPublicaController extends Controller
{
    /**
     * Obtener una encuesta pública por URL corta o ID
     */
    public function obtenerEncuesta(string $identificador): JsonResponse
    {
        $encuesta = Encuesta::where('url_corta', $identificador)
                           ->orWhere('encuesta_id', $identificador)
                           ->where('estado', 'activo')
                           ->with(['preguntas.opciones'])
                           ->first();
        
        if (!$encuesta) {
            return response()->json([
                'success' => false,
                'message' => 'Encuesta no encontrada o no disponible'
            ], 404);
        }

        // Verificar si la encuesta está en el período activo
        $now = now();
        if ($encuesta->fecha_inicio && $now < $encuesta->fecha_inicio) {
            return response()->json([
                'success' => false,
                'message' => 'La encuesta aún no ha comenzado'
            ], 403);
        }

        if ($encuesta->fecha_fin && $now > $encuesta->fecha_fin) {
            return response()->json([
                'success' => false,
                'message' => 'La encuesta ha finalizado'
            ], 403);
        }
        
        return response()->json([
            'success' => true,
            'data' => $encuesta,
            'message' => 'Encuesta obtenida exitosamente'
        ]);
    }

    /**
     * Enviar respuesta a una encuesta pública
     */
    public function enviarRespuesta(Request $request, string $encuestaId): JsonResponse
    {
        $validated = $request->validate([
            'persona_externa' => 'required|array',
            'persona_externa.nombre' => 'required|string|max:255',
            'persona_externa.email' => 'required|email|max:255',
            'persona_externa.telefono' => 'nullable|string|max:255',
            'respuestas' => 'required|array',
            'respuestas.*.pregunta_id' => 'required|exists:preguntas,pregunta_id',
            'respuestas.*.opcion_id' => 'nullable|exists:opciones_respuesta,opcion_id',
            'respuestas.*.respuesta_texto' => 'nullable|string',
            'medio' => 'required|string|in:web,email,qr_code,whatsapp,facebook,linkedin,sms'
        ]);

        // Verificar que la encuesta existe y está activa
        $encuesta = Encuesta::where('encuesta_id', $encuestaId)
                           ->where('estado', 'activo')
                           ->with('preguntas')
                           ->first();

        if (!$encuesta) {
            return response()->json([
                'success' => false,
                'message' => 'Encuesta no encontrada o no disponible'
            ], 404);
        }

        DB::beginTransaction();
        try {
            // Crear o encontrar persona externa
            $personaExterna = PersonaExterna::firstOrCreate(
                ['email' => $validated['persona_externa']['email']],
                $validated['persona_externa']
            );

            // Crear respuesta principal
            $respuesta = Respuesta::create([
                'encuesta_id' => $encuesta->encuesta_id,
                'persona_externa_id' => $personaExterna->persona_externa_id,
                'fecha_respuesta' => now(),
                'medio' => $validated['medio']
            ]);

            // Crear respuestas detalle
            foreach ($validated['respuestas'] as $respuestaData) {
                RespuestaDetalle::create([
                    'respuesta_id' => $respuesta->respuesta_id,
                    'pregunta_id' => $respuestaData['pregunta_id'],
                    'opcion_id' => $respuestaData['opcion_id'] ?? null,
                    'respuesta_texto' => $respuestaData['respuesta_texto'] ?? null
                ]);
            }

            DB::commit();

            return response()->json([
                'success' => true,
                'data' => $respuesta->load(['detalles.pregunta', 'detalles.opcion']),
                'message' => 'Respuesta enviada exitosamente'
            ], 201);

        } catch (\Exception $e) {
            DB::rollback();
            return response()->json([
                'success' => false,
                'message' => 'Error al enviar la respuesta: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Verificar si una persona ya respondió una encuesta
     */
    public function verificarRespuesta(Request $request, string $encuestaId): JsonResponse
    {
        $request->validate([
            'email' => 'required|email'
        ]);

        $personaExterna = PersonaExterna::where('email', $request->email)->first();
        
        if (!$personaExterna) {
            return response()->json([
                'success' => true,
                'ha_respondido' => false,
                'message' => 'La persona no ha respondido esta encuesta'
            ]);
        }

        $respuesta = Respuesta::where('encuesta_id', $encuestaId)
                             ->where('persona_externa_id', $personaExterna->persona_externa_id)
                             ->exists();

        return response()->json([
            'success' => true,
            'ha_respondido' => $respuesta,
            'message' => $respuesta ? 'La persona ya ha respondido esta encuesta' : 'La persona no ha respondido esta encuesta'
        ]);
    }
}
