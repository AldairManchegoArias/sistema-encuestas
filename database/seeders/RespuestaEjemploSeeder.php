<?php

namespace Database\Seeders;

use App\Models\Encuesta;
use App\Models\Encuestado;
use App\Models\Respuesta;
use Illuminate\Database\Seeder;

class RespuestaEjemploSeeder extends Seeder
{
    public function run(): void
    {
        // Obtener la primera encuesta y encuestado
        $encuesta = Encuesta::first();
        $encuestado1 = Encuestado::first();
        $encuestado2 = Encuestado::skip(1)->first();

        if ($encuesta && $encuestado1) {
            // Crear respuesta del primer encuestado
            Respuesta::create([
                'encuesta_id' => $encuesta->encuesta_id,
                'encuestado_id' => $encuestado1->encuestado_id,
                'respuestas' => [
                    '1' => 'Excelente',
                    '2' => ['Calidad del producto', 'Atención al cliente'],
                    '3' => 'Muy satisfecho con el servicio recibido, especialmente la atención personalizada.'
                ],
                'medio' => 'web'
            ]);
            
            echo "✅ Respuesta del encuestado 1 creada\n";
        }

        if ($encuesta && $encuestado2) {
            // Crear respuesta del segundo encuestado
            Respuesta::create([
                'encuesta_id' => $encuesta->encuesta_id,
                'encuestado_id' => $encuestado2->encuestado_id,
                'respuestas' => [
                    '1' => 'Muy bueno',
                    '2' => ['Precio competitivo', 'Tiempo de entrega', 'Soporte técnico'],
                    '3' => 'En general una experiencia positiva, aunque hay margen de mejora en algunos procesos.'
                ],
                'medio' => 'mobile'
            ]);
            
            echo "✅ Respuesta del encuestado 2 creada\n";
        }

        echo "📊 Respuestas de ejemplo creadas exitosamente\n";
    }
}