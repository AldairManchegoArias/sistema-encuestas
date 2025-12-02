<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Eliminar tablas antiguas en el orden correcto (por dependencias)
        Schema::dropIfExists('respuestas_detalle');
        Schema::dropIfExists('respuestas');
        Schema::dropIfExists('opciones_respuesta');
        Schema::dropIfExists('preguntas');
        Schema::dropIfExists('encuestas');
        Schema::dropIfExists('personas_externas');
        Schema::dropIfExists('personas_autorizadas');
        Schema::dropIfExists('empresas');

        // Crear nueva tabla: empresa
        Schema::create('empresa', function (Blueprint $table) {
            $table->id('empresa_id');
            $table->string('nombre');
            $table->string('documento')->unique()->comment('NIT o CC de la empresa');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('email');
            $table->string('estado')->default('activo');
            $table->timestamp('fecha_creacion')->useCurrent();
        });

        // Crear nueva tabla: persona_autorizada
        Schema::create('persona_autorizada', function (Blueprint $table) {
            $table->id('persona_id');
            $table->foreignId('empresa_id')->constrained('empresa', 'empresa_id')->onDelete('cascade');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('email');
            $table->string('rol');
            $table->string('estado')->default('activo');
            $table->timestamp('fecha_registro')->useCurrent();
        });

        // Crear nueva tabla: encuesta
        Schema::create('encuesta', function (Blueprint $table) {
            $table->id('encuesta_id');
            $table->foreignId('empresa_id')->constrained('empresa', 'empresa_id')->onDelete('cascade');
            $table->string('titulo');
            $table->text('descripcion');
            $table->json('config')->nullable()->comment('Configuraciones: color, portada, lógica');
            $table->timestamp('fecha_inicio');
            $table->timestamp('fecha_fin');
            $table->string('estado')->default('borrador');
        });

        // Crear nueva tabla: pregunta
        Schema::create('pregunta', function (Blueprint $table) {
            $table->id('pregunta_id');
            $table->foreignId('encuesta_id')->constrained('encuesta', 'encuesta_id')->onDelete('cascade');
            $table->string('tipo')->comment('text, select, multiselect, boolean, rating, etc.');
            $table->text('texto');
            $table->json('metadata')->nullable()->comment('opciones, validaciones, rango, placeholder, etc.');
            $table->integer('orden');
        });

        // Crear nueva tabla: encuestado
        Schema::create('encuestado', function (Blueprint $table) {
            $table->id('encuestado_id');
            $table->string('nombre');
            $table->string('email');
            $table->string('telefono')->nullable();
            $table->string('tipo')->comment('interno | externo');
        });

        // Crear nueva tabla: respuesta
        Schema::create('respuesta', function (Blueprint $table) {
            $table->id('respuesta_id');
            $table->foreignId('encuesta_id')->constrained('encuesta', 'encuesta_id')->onDelete('cascade');
            $table->foreignId('encuestado_id')->constrained('encuestado', 'encuestado_id')->onDelete('cascade');
            $table->timestamp('fecha_respuesta')->useCurrent();
            $table->json('respuestas')->comment('Todas las respuestas en un solo JSON');
            $table->string('medio')->nullable()->comment('web, mobile, email, etc.');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Eliminar nuevas tablas en orden inverso
        Schema::dropIfExists('respuesta');
        Schema::dropIfExists('encuestado');
        Schema::dropIfExists('pregunta');
        Schema::dropIfExists('encuesta');
        Schema::dropIfExists('persona_autorizada');
        Schema::dropIfExists('empresa');
        
        // Aquí podrías recrear las tablas antiguas si fuera necesario
        // Pero como es una reestructuración completa, es mejor hacer backup antes
    }
};
