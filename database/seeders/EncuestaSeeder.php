<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EncuestaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('encuestas')->insert([
            [
                'empresa_id' => 1,
                'titulo' => 'Satisfacción del Cliente - Servicios TI',
                'descripcion' => 'Encuesta para evaluar la satisfacción de nuestros clientes con los servicios de tecnología proporcionados.',
                'fecha_inicio' => now(),
                'fecha_fin' => now()->addDays(30),
                'url_larga' => 'https://encuestas.technosoft.com.gt/satisfaccion-cliente-servicios-ti-2024',
                'url_corta' => 'https://bit.ly/ts-satisfaccion',
                'qr_code' => 'qr_code_satisfaccion_ti.png',
                'estado' => 'activo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'empresa_id' => 1,
                'titulo' => 'Evaluación de Productos Software',
                'descripcion' => 'Encuesta dirigida a evaluar la calidad y usabilidad de nuestros productos de software.',
                'fecha_inicio' => now()->addDays(5),
                'fecha_fin' => now()->addDays(35),
                'url_larga' => 'https://encuestas.technosoft.com.gt/evaluacion-productos-software',
                'url_corta' => 'https://bit.ly/ts-productos',
                'qr_code' => 'qr_code_productos_software.png',
                'estado' => 'borrador',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'empresa_id' => 2,
                'titulo' => 'Investigación de Mercado Digital',
                'descripcion' => 'Estudio sobre tendencias digitales y comportamiento del consumidor en el mercado guatemalteco.',
                'fecha_inicio' => now()->subDays(10),
                'fecha_fin' => now()->addDays(20),
                'url_larga' => 'https://surveys.innovaciondigital.com/investigacion-mercado-digital-gt',
                'url_corta' => 'https://bit.ly/id-mercado',
                'qr_code' => 'qr_code_mercado_digital.png',
                'estado' => 'activo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'empresa_id' => 2,
                'titulo' => 'Feedback Servicios de Consultoría',
                'descripcion' => 'Evaluación de la calidad de nuestros servicios de consultoría en transformación digital.',
                'fecha_inicio' => now()->addDays(7),
                'fecha_fin' => now()->addDays(37),
                'url_larga' => 'https://surveys.innovaciondigital.com/feedback-consultoria-digital',
                'url_corta' => 'https://bit.ly/id-consultoria',
                'qr_code' => 'qr_code_consultoria.png',
                'estado' => 'borrador',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'empresa_id' => 3,
                'titulo' => 'Clima Organizacional 2024',
                'descripcion' => 'Encuesta anual para medir el clima organizacional y satisfacción de los empleados.',
                'fecha_inicio' => now()->subDays(5),
                'fecha_fin' => now()->addDays(25),
                'url_larga' => 'https://forms.consultores.com.gt/clima-organizacional-2024',
                'url_corta' => 'https://bit.ly/ce-clima2024',
                'qr_code' => 'qr_code_clima_organizacional.png',
                'estado' => 'activo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'empresa_id' => 5,
                'titulo' => 'Uso de Herramientas de Analytics',
                'descripcion' => 'Investigación sobre el uso y adopción de herramientas de análisis de datos en empresas.',
                'fecha_inicio' => now(),
                'fecha_fin' => now()->addDays(45),
                'url_larga' => 'https://research.dataanalytics.com/uso-herramientas-analytics-empresas',
                'url_corta' => 'https://bit.ly/da-analytics',
                'qr_code' => 'qr_code_analytics_tools.png',
                'estado' => 'activo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'empresa_id' => 5,
                'titulo' => 'Tendencias en Business Intelligence',
                'descripcion' => 'Estudio sobre las tendencias actuales y futuras en Business Intelligence y Data Science.',
                'fecha_inicio' => now()->addDays(15),
                'fecha_fin' => now()->addDays(60),
                'url_larga' => 'https://research.dataanalytics.com/tendencias-business-intelligence',
                'url_corta' => 'https://bit.ly/da-bi-trends',
                'qr_code' => 'qr_code_bi_trends.png',
                'estado' => 'borrador',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
