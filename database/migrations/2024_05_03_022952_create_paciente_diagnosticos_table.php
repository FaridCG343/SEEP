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
        Schema::create('paciente_diagnosticos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('paciente_id')->constrained();
            $table->foreignId('diagnostico_id')->constrained();
            $table->date('fecha_diagnostico');
            $table->enum('estatus', ['Activo', 'Inactivo', 'Resuelto'])->default('Activo');
            $table->date('fecha_resolucion')->nullable();
            $table->string('observaciones', 255)->nullable();
            $table->foreignId('encuentro_id')->comment('ID del encuentro en el que se realizó el diagnóstico')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paciente_diagnosticos');
    }
};
