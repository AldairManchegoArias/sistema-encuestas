<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonaExternaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('personas_externas')->insert([
            [
                'nombre' => 'Juan Carlos Pérez',
                'email' => 'juancarlos.perez@gmail.com',
                'telefono' => '+502 5555-1234',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'María Elena Rodríguez',
                'email' => 'maria.rodriguez@hotmail.com',
                'telefono' => '+502 5555-2345',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Carlos Alberto Gómez',
                'email' => 'carlos.gomez@outlook.com',
                'telefono' => '+502 5555-3456',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Ana Lucía Morales',
                'email' => 'ana.morales@yahoo.com',
                'telefono' => '+502 5555-4567',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Roberto Díaz',
                'email' => 'roberto.diaz@gmail.com',
                'telefono' => '+502 5555-5678',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Sofía Hernández',
                'email' => 'sofia.hernandez@gmail.com',
                'telefono' => '+502 5555-6789',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Luis Fernando Castro',
                'email' => 'luis.castro@hotmail.com',
                'telefono' => '+502 5555-7890',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Gabriela Vargas',
                'email' => 'gabriela.vargas@outlook.com',
                'telefono' => '+502 5555-8901',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Miguel Ángel Ruiz',
                'email' => 'miguel.ruiz@gmail.com',
                'telefono' => '+502 5555-9012',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Carmen Leticia Torres',
                'email' => 'carmen.torres@yahoo.com',
                'telefono' => '+502 5555-0123',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Francisco Javier López',
                'email' => 'francisco.lopez@gmail.com',
                'telefono' => '+502 5555-1234',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Beatriz Alejandra Méndez',
                'email' => 'beatriz.mendez@hotmail.com',
                'telefono' => '+502 5555-2346',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Diego Alejandro Fuentes',
                'email' => 'diego.fuentes@outlook.com',
                'telefono' => '+502 5555-3457',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Valeria Cristina Aguilar',
                'email' => 'valeria.aguilar@gmail.com',
                'telefono' => '+502 5555-4568',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Andrés Mauricio Ramos',
                'email' => 'andres.ramos@yahoo.com',
                'telefono' => '+502 5555-5679',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
