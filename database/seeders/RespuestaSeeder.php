<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RespuestaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('respuestas')->insert([
            // Respuestas para "Satisfacción del Cliente - Servicios TI" (encuesta_id: 1)
            [
                'encuesta_id' => 1,
                'persona_externa_id' => 1,
                'fecha_respuesta' => now()->subDays(5),
                'medio' => 'web',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'encuesta_id' => 1,
                'persona_externa_id' => 2,
                'fecha_respuesta' => now()->subDays(4),
                'medio' => 'email',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'encuesta_id' => 1,
                'persona_externa_id' => 3,
                'fecha_respuesta' => now()->subDays(3),
                'medio' => 'qr_code',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'encuesta_id' => 1,
                'persona_externa_id' => 4,
                'fecha_respuesta' => now()->subDays(2),
                'medio' => 'web',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'encuesta_id' => 1,
                'persona_externa_id' => 5,
                'fecha_respuesta' => now()->subDays(1),
                'medio' => 'whatsapp',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Respuestas para "Investigación de Mercado Digital" (encuesta_id: 3)
            [
                'encuesta_id' => 3,
                'persona_externa_id' => 6,
                'fecha_respuesta' => now()->subDays(8),
                'medio' => 'web',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'encuesta_id' => 3,
                'persona_externa_id' => 7,
                'fecha_respuesta' => now()->subDays(7),
                'medio' => 'facebook',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'encuesta_id' => 3,
                'persona_externa_id' => 8,
                'fecha_respuesta' => now()->subDays(6),
                'medio' => 'email',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'encuesta_id' => 3,
                'persona_externa_id' => 9,
                'fecha_respuesta' => now()->subDays(4),
                'medio' => 'qr_code',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Respuestas para "Clima Organizacional 2024" (encuesta_id: 5)
            [
                'encuesta_id' => 5,
                'persona_externa_id' => 10,
                'fecha_respuesta' => now()->subDays(3),
                'medio' => 'web',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'encuesta_id' => 5,
                'persona_externa_id' => 11,
                'fecha_respuesta' => now()->subDays(2),
                'medio' => 'email',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'encuesta_id' => 5,
                'persona_externa_id' => 12,
                'fecha_respuesta' => now()->subDays(1),
                'medio' => 'web',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Respuestas para "Uso de Herramientas de Analytics" (encuesta_id: 6)
            [
                'encuesta_id' => 6,
                'persona_externa_id' => 13,
                'fecha_respuesta' => now()->subDays(2),
                'medio' => 'linkedin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'encuesta_id' => 6,
                'persona_externa_id' => 14,
                'fecha_respuesta' => now()->subDays(1),
                'medio' => 'web',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'encuesta_id' => 6,
                'persona_externa_id' => 15,
                'fecha_respuesta' => now(),
                'medio' => 'email',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
