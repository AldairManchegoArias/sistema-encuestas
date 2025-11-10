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
        Schema::create('encuestas', function (Blueprint $table) {
            $table->id('encuesta_id');
            $table->unsignedBigInteger('empresa_id');
            $table->string('titulo');
            $table->text('descripcion');
            $table->timestamp('fecha_inicio')->nullable();
            $table->timestamp('fecha_fin')->nullable();
            $table->string('url_larga');
            $table->string('url_corta');
            $table->string('qr_code');
            $table->string('estado');
            $table->timestamps();

            $table->foreign('empresa_id')->references('empresa_id')->on('empresas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('encuestas');
    }
};
