<?php

namespace Database\Seeders;

use App\Models\Empresa;
use App\Models\PersonaAutorizada;
use App\Models\Encuesta;
use App\Models\Pregunta;
use App\Models\Encuestado;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SistemaEncuestasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear empresa de prueba
        $empresa = Empresa::create([
            'nombre' => 'Tech Solutions S.A.',
            'documento' => '800123456-1',
            'direccion' => 'Av. Principal 123',
            'telefono' => '555-1234',
            'email' => 'contacto@techsolutions.com',
            'estado' => 'activo'
        ]);

        // Crear personas autorizadas
        $admin = PersonaAutorizada::create([
            'empresa_id' => $empresa->empresa_id,
            'nombre' => 'María',
            'apellido' => 'García',
            'email' => 'maria.garcia@techsolutions.com',
            'rol' => 'administrador',
            'estado' => 'activo'
        ]);

        $creador = PersonaAutorizada::create([
            'empresa_id' => $empresa->empresa_id,
            'nombre' => 'Carlos',
            'apellido' => 'Mendez',
            'email' => 'carlos.mendez@techsolutions.com',
            'rol' => 'creador',
            'estado' => 'activo'
        ]);

        // Crear encuesta de prueba
        $encuesta = Encuesta::create([
            'empresa_id' => $empresa->empresa_id,
            'titulo' => 'Satisfacción del Cliente 2024',
            'descripcion' => 'Encuesta para medir la satisfacción de nuestros clientes',
            'config' => [
                'color_primario' => '#007bff',
                'mostrar_progreso' => true,
                'permitir_anonimo' => false
            ],
            'fecha_inicio' => now(),
            'fecha_fin' => now()->addDays(30),
            'estado' => 'activa'
        ]);

        // Crear preguntas
        Pregunta::create([
            'encuesta_id' => $encuesta->encuesta_id,
            'tipo' => 'select',
            'texto' => '¿Cómo calificaría nuestro servicio en general?',
            'metadata' => [
                'opciones' => [
                    'Excelente',
                    'Muy bueno',
                    'Bueno',
                    'Regular',
                    'Malo'
                ],
                'requerida' => true
            ],
            'orden' => 1
        ]);

        Pregunta::create([
            'encuesta_id' => $encuesta->encuesta_id,
            'tipo' => 'multiselect',
            'texto' => '¿Qué aspectos considera más importantes? (Seleccione todos los que apliquen)',
            'metadata' => [
                'opciones' => [
                    'Calidad del producto',
                    'Atención al cliente',
                    'Precio competitivo',
                    'Tiempo de entrega',
                    'Soporte técnico'
                ],
                'requerida' => false
            ],
            'orden' => 2
        ]);

        Pregunta::create([
            'encuesta_id' => $encuesta->encuesta_id,
            'tipo' => 'text',
            'texto' => '¿Tiene algún comentario adicional sobre nuestros servicios?',
            'metadata' => [
                'max_caracteres' => 500,
                'placeholder' => 'Escriba sus comentarios aquí...'
            ],
            'orden' => 3
        ]);

        // Crear encuestados de prueba
        $encuestado1 = Encuestado::create([
            'nombre' => 'Ana Rodríguez',
            'email' => 'ana.rodriguez@cliente1.com',
            'telefono' => '555-1111',
            'tipo' => 'externo'
        ]);

        $encuestado2 = Encuestado::create([
            'nombre' => 'Luis Fernández',
            'email' => 'luis.fernandez@cliente2.com',
            'telefono' => '555-2222',
            'tipo' => 'externo'
        ]);

        echo "✅ Seeder ejecutado correctamente\n";
        echo "📊 Datos creados:\n";
        echo "   - 1 Empresa: {$empresa->nombre}\n";
        echo "   - 2 Personas autorizadas (admin y creador)\n";
        echo "   - 1 Encuesta: {$encuesta->titulo}\n";
        echo "   - 3 Preguntas de diferentes tipos\n";
        echo "   - 2 Encuestados de prueba\n";
    }
}