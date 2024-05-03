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
        Schema::create('alergias', function (Blueprint $table) {
            $table->id();
            $table->string('tipo');
            $table->string('alergeno');
            $table->foreignId('paciente_id')->constrained();
            $table->string('grado', 50)->nullable();
            $table->string('tratamiento', 255)->nullable();
            $table->date('fecha_deteccion')->nullable();
            $table->enum('estatus', ['Activa', 'Resuelta', 'Inactiva'])->default('Activa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alergias');
    }
};
