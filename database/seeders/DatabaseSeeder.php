<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Ejecutar seeders en orden de dependencias
        $this->call([
            EmpresaSeeder::class,
            PersonaAutorizadaSeeder::class,
            EncuestaSeeder::class,
            PreguntaSeeder::class,
            OpcionRespuestaSeeder::class,
            PersonaExternaSeeder::class,
            RespuestaSeeder::class,
            RespuestaDetalleSeeder::class,
        ]);

        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
