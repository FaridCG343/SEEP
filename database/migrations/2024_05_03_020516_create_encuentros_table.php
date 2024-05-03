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
        Schema::create('encuentros', function (Blueprint $table) {
            $table->id();
            $table->foreignId('paciente_id')->constrained();
            $table->foreignId('medico_id')->constrained();
            $table->foreignId('institucion_medica_id')->constrained('instituciones_medicas');
            $table->foreignId('departamento_id')->constrained();
            $table->dateTime('fecha_inicio');
            $table->dateTime('fecha_fin');
            $table->enum('tipo', ['Consulta', 'Examen', 'Operación'])->default('Consulta');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('encuentros');
    }
};
