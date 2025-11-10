<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RespuestaDetalleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('respuestas_detalle')->insert([
            // Respuestas detalle para respuesta 1 (Juan Carlos - Satisfacción TI)
            [
                'respuesta_id' => 1,
                'pregunta_id' => 1, // Calidad general
                'opcion_id' => 2, // Muy bueno
                'respuesta_texto' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'respuesta_id' => 1,
                'pregunta_id' => 2, // Tiempo de respuesta
                'opcion_id' => 7, // Satisfecho
                'respuesta_texto' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'respuesta_id' => 1,
                'pregunta_id' => 3, // Mejoras (texto libre)
                'opcion_id' => null,
                'respuesta_texto' => 'Podrían mejorar la comunicación durante los mantenimientos programados.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'respuesta_id' => 1,
                'pregunta_id' => 4, // Recomendación
                'opcion_id' => 11, // Definitivamente sí
                'respuesta_texto' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Respuestas detalle para respuesta 2 (María Elena - Satisfacción TI)
            [
                'respuesta_id' => 2,
                'pregunta_id' => 1,
                'opcion_id' => 1, // Excelente
                'respuesta_texto' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'respuesta_id' => 2,
                'pregunta_id' => 2,
                'opcion_id' => 6, // Muy satisfecho
                'respuesta_texto' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'respuesta_id' => 2,
                'pregunta_id' => 3,
                'opcion_id' => null,
                'respuesta_texto' => 'Excelente servicio, muy profesionales.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'respuesta_id' => 2,
                'pregunta_id' => 4,
                'opcion_id' => 11, // Definitivamente sí
                'respuesta_texto' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Respuestas detalle para respuesta 6 (Investigación Mercado Digital)
            [
                'respuesta_id' => 6,
                'pregunta_id' => 5, // Rango de edad
                'opcion_id' => 17, // 26-35 años
                'respuesta_texto' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'respuesta_id' => 6,
                'pregunta_id' => 6, // Frecuencia compras
                'opcion_id' => 22, // Semanalmente
                'respuesta_texto' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'respuesta_id' => 6,
                'pregunta_id' => 7, // Redes sociales (múltiple)
                'opcion_id' => 25, // Facebook
                'respuesta_texto' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'respuesta_id' => 6,
                'pregunta_id' => 7, // Instagram también
                'opcion_id' => 26,
                'respuesta_texto' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'respuesta_id' => 6,
                'pregunta_id' => 8, // Factores de compra (texto libre)
                'opcion_id' => null,
                'respuesta_texto' => 'Precio, calidad del producto y facilidad de entrega.',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Respuestas detalle para respuesta 10 (Clima Organizacional)
            [
                'respuesta_id' => 10,
                'pregunta_id' => 9, // Satisfacción trabajo (escala 1-10)
                'opcion_id' => null,
                'respuesta_texto' => '8',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'respuesta_id' => 10,
                'pregunta_id' => 10, // Carga de trabajo
                'opcion_id' => 32, // Generalmente manejable
                'respuesta_texto' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'respuesta_id' => 10,
                'pregunta_id' => 11, // Oportunidades crecimiento
                'opcion_id' => 37, // Algunas oportunidades
                'respuesta_texto' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'respuesta_id' => 10,
                'pregunta_id' => 12, // Sugerencias (texto libre)
                'opcion_id' => null,
                'respuesta_texto' => 'Más actividades de integración y mejor comunicación entre departamentos.',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Respuestas detalle para respuesta 13 (Analytics)
            [
                'respuesta_id' => 13,
                'pregunta_id' => 13, // Tamaño empresa
                'opcion_id' => 44, // Mediana empresa
                'respuesta_texto' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'respuesta_id' => 13,
                'pregunta_id' => 14, // Herramientas analytics (múltiple)
                'opcion_id' => 46, // Google Analytics
                'respuesta_texto' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'respuesta_id' => 13,
                'pregunta_id' => 14, // Excel también
                'opcion_id' => 49,
                'respuesta_texto' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'respuesta_id' => 13,
                'pregunta_id' => 15, // Principal desafío
                'opcion_id' => 53, // Falta de personal capacitado
                'respuesta_texto' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
