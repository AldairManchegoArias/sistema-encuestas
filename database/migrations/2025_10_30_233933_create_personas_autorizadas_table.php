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
        Schema::create('personas_autorizadas', function (Blueprint $table) {
            $table->id('persona_id');
            $table->unsignedBigInteger('empresa_id');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('email');
            $table->string('rol');
            $table->string('estado');
            $table->timestamp('fecha_registro')->nullable()->useCurrent();
            $table->timestamps();

            $table->foreign('empresa_id')->references('empresa_id')->on('empresas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personas_autorizadas');
    }
};
