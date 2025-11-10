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
        Schema::create('respuestas', function (Blueprint $table) {
            $table->id('respuesta_id');
            $table->unsignedBigInteger('encuesta_id');
            $table->unsignedBigInteger('persona_externa_id');
            $table->timestamp('fecha_respuesta')->nullable()->useCurrent();
            $table->string('medio');
            $table->timestamps();

            $table->foreign('encuesta_id')->references('encuesta_id')->on('encuestas')->onDelete('cascade');
            $table->foreign('persona_externa_id')->references('persona_externa_id')->on('personas_externas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('respuestas');
    }
};
