<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmpresaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('empresas')->insert([
            [
                'nombre' => 'TechnoSoft Solutions',
                'direccion' => 'Av. Principal 123, Zona 10, Ciudad de Guatemala',
                'telefono' => '+502 2345-6789',
                'email' => 'contacto@technosoft.com.gt',
                'estado' => 'activo',
                'fecha_creacion' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Innovación Digital S.A.',
                'direccion' => 'Centro Empresarial Torre 1, Oficina 504, Guatemala',
                'telefono' => '+502 2456-7890',
                'email' => 'info@innovaciondigital.com',
                'estado' => 'activo',
                'fecha_creacion' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Consultores Estratégicos Ltda.',
                'direccion' => '15 Calle 8-45, Zona 13, Guatemala City',
                'telefono' => '+502 2567-8901',
                'email' => 'ventas@consultores.com.gt',
                'estado' => 'activo',
                'fecha_creacion' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Marketing Pro Agency',
                'direccion' => 'Edificio Empresarial, 4to nivel, Carretera Roosevelt',
                'telefono' => '+502 2678-9012',
                'email' => 'contacto@marketingpro.gt',
                'estado' => 'inactivo',
                'fecha_creacion' => now()->subDays(30),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Data Analytics Corp',
                'direccion' => 'Plaza Comercial Los Robles, Local 201, Zona 14',
                'telefono' => '+502 2789-0123',
                'email' => 'hello@dataanalytics.com',
                'estado' => 'activo',
                'fecha_creacion' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
