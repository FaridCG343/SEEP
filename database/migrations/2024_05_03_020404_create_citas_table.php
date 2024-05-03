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
        Schema::create('citas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('paciente_id')->constrained();
            $table->foreignId('medico_id')->constrained();
            $table->foreignId('institucion_medica_id')->constrained('instituciones_medicas');
            $table->foreignId('departamento_id')->constrained();
            $table->dateTime('fecha_hora_cita');
            $table->enum('tipo', ['Consulta', 'Examen', 'Operación'])->default('Consulta');
            $table->enum('estatus', ['Pendiente', 'Atendida', 'Cancelada'])->default('Pendiente');
            $table->string('motivo', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('citas');
    }
};
