<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonaAutorizadaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('personas_autorizadas')->insert([
            // TechnoSoft Solutions (empresa_id: 1)
            [
                'empresa_id' => 1,
                'nombre' => 'María',
                'apellido' => 'González',
                'email' => 'maria.gonzalez@technosoft.com.gt',
                'rol' => 'administrador',
                'estado' => 'activo',
                'fecha_registro' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'empresa_id' => 1,
                'nombre' => 'Carlos',
                'apellido' => 'Rodríguez',
                'email' => 'carlos.rodriguez@technosoft.com.gt',
                'rol' => 'creador',
                'estado' => 'activo',
                'fecha_registro' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'empresa_id' => 1,
                'nombre' => 'Ana',
                'apellido' => 'López',
                'email' => 'ana.lopez@technosoft.com.gt',
                'rol' => 'analista',
                'estado' => 'activo',
                'fecha_registro' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
            // Innovación Digital S.A. (empresa_id: 2)
            [
                'empresa_id' => 2,
                'nombre' => 'Roberto',
                'apellido' => 'Méndez',
                'email' => 'roberto.mendez@innovaciondigital.com',
                'rol' => 'administrador',
                'estado' => 'activo',
                'fecha_registro' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'empresa_id' => 2,
                'nombre' => 'Patricia',
                'apellido' => 'Hernández',
                'email' => 'patricia.hernandez@innovaciondigital.com',
                'rol' => 'creador',
                'estado' => 'activo',
                'fecha_registro' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'empresa_id' => 2,
                'nombre' => 'Diego',
                'apellido' => 'Morales',
                'email' => 'diego.morales@innovaciondigital.com',
                'rol' => 'analista',
                'estado' => 'inactivo',
                'fecha_registro' => now()->subDays(15),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
            // Consultores Estratégicos Ltda. (empresa_id: 3)
            [
                'empresa_id' => 3,
                'nombre' => 'Lucía',
                'apellido' => 'Vargas',
                'email' => 'lucia.vargas@consultores.com.gt',
                'rol' => 'administrador',
                'estado' => 'activo',
                'fecha_registro' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'empresa_id' => 3,
                'nombre' => 'Fernando',
                'apellido' => 'Castro',
                'email' => 'fernando.castro@consultores.com.gt',
                'rol' => 'creador',
                'estado' => 'activo',
                'fecha_registro' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
            // Data Analytics Corp (empresa_id: 5)
            [
                'empresa_id' => 5,
                'nombre' => 'Sandra',
                'apellido' => 'Ruiz',
                'email' => 'sandra.ruiz@dataanalytics.com',
                'rol' => 'administrador',
                'estado' => 'activo',
                'fecha_registro' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'empresa_id' => 5,
                'nombre' => 'Miguel',
                'apellido' => 'Torres',
                'email' => 'miguel.torres@dataanalytics.com',
                'rol' => 'analista',
                'estado' => 'activo',
                'fecha_registro' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
