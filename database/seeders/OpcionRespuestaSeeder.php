<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OpcionRespuestaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('opciones_respuesta')->insert([
            // Opciones para pregunta 1: "¿Cómo calificaría la calidad general de nuestros servicios de TI?"
            ['pregunta_id' => 1, 'texto_opcion' => 'Excelente', 'valor' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['pregunta_id' => 1, 'texto_opcion' => 'Muy bueno', 'valor' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['pregunta_id' => 1, 'texto_opcion' => 'Bueno', 'valor' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['pregunta_id' => 1, 'texto_opcion' => 'Regular', 'valor' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['pregunta_id' => 1, 'texto_opcion' => 'Malo', 'valor' => 1, 'created_at' => now(), 'updated_at' => now()],

            // Opciones para pregunta 2: "¿Qué tan satisfecho está con el tiempo de respuesta de nuestro soporte técnico?"
            ['pregunta_id' => 2, 'texto_opcion' => 'Muy satisfecho', 'valor' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['pregunta_id' => 2, 'texto_opcion' => 'Satisfecho', 'valor' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['pregunta_id' => 2, 'texto_opcion' => 'Neutral', 'valor' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['pregunta_id' => 2, 'texto_opcion' => 'Insatisfecho', 'valor' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['pregunta_id' => 2, 'texto_opcion' => 'Muy insatisfecho', 'valor' => 1, 'created_at' => now(), 'updated_at' => now()],

            // Opciones para pregunta 4: "¿Recomendaría nuestros servicios a otras empresas?"
            ['pregunta_id' => 4, 'texto_opcion' => 'Definitivamente sí', 'valor' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['pregunta_id' => 4, 'texto_opcion' => 'Probablemente sí', 'valor' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['pregunta_id' => 4, 'texto_opcion' => 'Neutral', 'valor' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['pregunta_id' => 4, 'texto_opcion' => 'Probablemente no', 'valor' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['pregunta_id' => 4, 'texto_opcion' => 'Definitivamente no', 'valor' => 1, 'created_at' => now(), 'updated_at' => now()],

            // Opciones para pregunta 5: "¿Cuál es su rango de edad?"
            ['pregunta_id' => 5, 'texto_opcion' => '18-25 años', 'valor' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['pregunta_id' => 5, 'texto_opcion' => '26-35 años', 'valor' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['pregunta_id' => 5, 'texto_opcion' => '36-45 años', 'valor' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['pregunta_id' => 5, 'texto_opcion' => '46-55 años', 'valor' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['pregunta_id' => 5, 'texto_opcion' => 'Más de 55 años', 'valor' => 5, 'created_at' => now(), 'updated_at' => now()],

            // Opciones para pregunta 6: "¿Con qué frecuencia realiza compras en línea?"
            ['pregunta_id' => 6, 'texto_opcion' => 'Diariamente', 'valor' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['pregunta_id' => 6, 'texto_opcion' => 'Semanalmente', 'valor' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['pregunta_id' => 6, 'texto_opcion' => 'Mensualmente', 'valor' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['pregunta_id' => 6, 'texto_opcion' => 'Ocasionalmente', 'valor' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['pregunta_id' => 6, 'texto_opcion' => 'Nunca', 'valor' => 1, 'created_at' => now(), 'updated_at' => now()],

            // Opciones para pregunta 7: "¿Qué redes sociales utiliza más frecuentemente?"
            ['pregunta_id' => 7, 'texto_opcion' => 'Facebook', 'valor' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['pregunta_id' => 7, 'texto_opcion' => 'Instagram', 'valor' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['pregunta_id' => 7, 'texto_opcion' => 'Twitter', 'valor' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['pregunta_id' => 7, 'texto_opcion' => 'LinkedIn', 'valor' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['pregunta_id' => 7, 'texto_opcion' => 'TikTok', 'valor' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['pregunta_id' => 7, 'texto_opcion' => 'YouTube', 'valor' => 6, 'created_at' => now(), 'updated_at' => now()],

            // Opciones para pregunta 10: "¿Siente que su carga de trabajo es manejable?"
            ['pregunta_id' => 10, 'texto_opcion' => 'Totalmente manejable', 'valor' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['pregunta_id' => 10, 'texto_opcion' => 'Generalmente manejable', 'valor' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['pregunta_id' => 10, 'texto_opcion' => 'A veces es difícil', 'valor' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['pregunta_id' => 10, 'texto_opcion' => 'Frecuentemente abrumadora', 'valor' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['pregunta_id' => 10, 'texto_opcion' => 'Completamente abrumadora', 'valor' => 1, 'created_at' => now(), 'updated_at' => now()],

            // Opciones para pregunta 11: "¿Considera que tiene oportunidades de crecimiento profesional?"
            ['pregunta_id' => 11, 'texto_opcion' => 'Muchas oportunidades', 'valor' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['pregunta_id' => 11, 'texto_opcion' => 'Algunas oportunidades', 'valor' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['pregunta_id' => 11, 'texto_opcion' => 'Pocas oportunidades', 'valor' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['pregunta_id' => 11, 'texto_opcion' => 'Muy pocas oportunidades', 'valor' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['pregunta_id' => 11, 'texto_opcion' => 'Ninguna oportunidad', 'valor' => 1, 'created_at' => now(), 'updated_at' => now()],

            // Opciones para pregunta 13: "¿Qué tamaño tiene su empresa?"
            ['pregunta_id' => 13, 'texto_opcion' => 'Microempresa (1-10 empleados)', 'valor' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['pregunta_id' => 13, 'texto_opcion' => 'Pequeña empresa (11-50 empleados)', 'valor' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['pregunta_id' => 13, 'texto_opcion' => 'Mediana empresa (51-200 empleados)', 'valor' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['pregunta_id' => 13, 'texto_opcion' => 'Gran empresa (más de 200 empleados)', 'valor' => 4, 'created_at' => now(), 'updated_at' => now()],

            // Opciones para pregunta 14: "¿Qué herramientas de analytics utiliza actualmente?"
            ['pregunta_id' => 14, 'texto_opcion' => 'Google Analytics', 'valor' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['pregunta_id' => 14, 'texto_opcion' => 'Power BI', 'valor' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['pregunta_id' => 14, 'texto_opcion' => 'Tableau', 'valor' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['pregunta_id' => 14, 'texto_opcion' => 'Excel', 'valor' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['pregunta_id' => 14, 'texto_opcion' => 'R/Python', 'valor' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['pregunta_id' => 14, 'texto_opcion' => 'Ninguna', 'valor' => 6, 'created_at' => now(), 'updated_at' => now()],

            // Opciones para pregunta 15: "¿Cuál es el principal desafío al implementar analytics?"
            ['pregunta_id' => 15, 'texto_opcion' => 'Falta de presupuesto', 'valor' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['pregunta_id' => 15, 'texto_opcion' => 'Falta de personal capacitado', 'valor' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['pregunta_id' => 15, 'texto_opcion' => 'Calidad de los datos', 'valor' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['pregunta_id' => 15, 'texto_opcion' => 'Resistencia al cambio', 'valor' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['pregunta_id' => 15, 'texto_opcion' => 'Falta de herramientas adecuadas', 'valor' => 5, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
