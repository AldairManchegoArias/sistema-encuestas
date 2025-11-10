<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PreguntaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('preguntas')->insert([
            // Preguntas para "Satisfacción del Cliente - Servicios TI" (encuesta_id: 1)
            [
                'encuesta_id' => 1,
                'tipo' => 'opcion_multiple',
                'texto_pregunta' => '¿Cómo calificaría la calidad general de nuestros servicios de TI?',
                'obligatoria' => true,
                'orden' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'encuesta_id' => 1,
                'tipo' => 'opcion_multiple',
                'texto_pregunta' => '¿Qué tan satisfecho está con el tiempo de respuesta de nuestro soporte técnico?',
                'obligatoria' => true,
                'orden' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'encuesta_id' => 1,
                'tipo' => 'texto_libre',
                'texto_pregunta' => '¿Qué aspectos de nuestros servicios considera que podríamos mejorar?',
                'obligatoria' => false,
                'orden' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'encuesta_id' => 1,
                'tipo' => 'opcion_multiple',
                'texto_pregunta' => '¿Recomendaría nuestros servicios a otras empresas?',
                'obligatoria' => true,
                'orden' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Preguntas para "Investigación de Mercado Digital" (encuesta_id: 3)
            [
                'encuesta_id' => 3,
                'tipo' => 'opcion_multiple',
                'texto_pregunta' => '¿Cuál es su rango de edad?',
                'obligatoria' => true,
                'orden' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'encuesta_id' => 3,
                'tipo' => 'opcion_multiple',
                'texto_pregunta' => '¿Con qué frecuencia realiza compras en línea?',
                'obligatoria' => true,
                'orden' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'encuesta_id' => 3,
                'tipo' => 'checkbox',
                'texto_pregunta' => '¿Qué redes sociales utiliza más frecuentemente? (puede seleccionar varias)',
                'obligatoria' => true,
                'orden' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'encuesta_id' => 3,
                'tipo' => 'texto_libre',
                'texto_pregunta' => '¿Qué factores influyen más en sus decisiones de compra online?',
                'obligatoria' => false,
                'orden' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Preguntas para "Clima Organizacional 2024" (encuesta_id: 5)
            [
                'encuesta_id' => 5,
                'tipo' => 'escala',
                'texto_pregunta' => 'En una escala del 1 al 10, ¿qué tan satisfecho está con su trabajo actual?',
                'obligatoria' => true,
                'orden' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'encuesta_id' => 5,
                'tipo' => 'opcion_multiple',
                'texto_pregunta' => '¿Siente que su carga de trabajo es manejable?',
                'obligatoria' => true,
                'orden' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'encuesta_id' => 5,
                'tipo' => 'opcion_multiple',
                'texto_pregunta' => '¿Considera que tiene oportunidades de crecimiento profesional en la empresa?',
                'obligatoria' => true,
                'orden' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'encuesta_id' => 5,
                'tipo' => 'texto_libre',
                'texto_pregunta' => '¿Qué sugerencias tiene para mejorar el ambiente de trabajo?',
                'obligatoria' => false,
                'orden' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Preguntas para "Uso de Herramientas de Analytics" (encuesta_id: 6)
            [
                'encuesta_id' => 6,
                'tipo' => 'opcion_multiple',
                'texto_pregunta' => '¿Qué tamaño tiene su empresa?',
                'obligatoria' => true,
                'orden' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'encuesta_id' => 6,
                'tipo' => 'checkbox',
                'texto_pregunta' => '¿Qué herramientas de analytics utiliza actualmente? (puede seleccionar varias)',
                'obligatoria' => true,
                'orden' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'encuesta_id' => 6,
                'tipo' => 'opcion_multiple',
                'texto_pregunta' => '¿Cuál es el principal desafío al implementar analytics en su empresa?',
                'obligatoria' => true,
                'orden' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
