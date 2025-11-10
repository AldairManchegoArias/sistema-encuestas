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
        Schema::create('respuestas_detalle', function (Blueprint $table) {
            $table->id('respuesta_detalle_id');
            $table->unsignedBigInteger('respuesta_id');
            $table->unsignedBigInteger('pregunta_id');
            $table->unsignedBigInteger('opcion_id')->nullable();
            $table->text('respuesta_texto')->nullable();
            $table->timestamps();

            $table->foreign('respuesta_id')->references('respuesta_id')->on('respuestas')->onDelete('cascade');
            $table->foreign('pregunta_id')->references('pregunta_id')->on('preguntas')->onDelete('cascade');
            $table->foreign('opcion_id')->references('opcion_id')->on('opciones_respuesta')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('respuestas_detalle');
    }
};
