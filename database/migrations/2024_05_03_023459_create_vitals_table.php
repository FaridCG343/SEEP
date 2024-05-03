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
        Schema::create('vitals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('encuentro_id')->constrained();
            $table->foreignId('paciente_id')->constrained();
            $table->string('temperatura', 10)->nullable()->comment('Temperatura en grados centígrados');
            $table->string('pulso', 10)->nullable()->comment('Pulso en latidos por minuto');
            $table->string('respiracion', 10)->nullable()->comment('Respiración en respiraciones por minuto');
            $table->string('presion_sistolica', 10)->nullable()->comment('Presión sistólica en mmHg');
            $table->string('presion_diastolica', 10)->nullable()->comment('Presión diastólica en mmHg');
            $table->string('saturacion_oxigeno', 10)->nullable()->comment('Saturación de oxígeno en porcentaje');
            $table->string('peso', 10)->nullable()->comment('Peso en kilogramos');
            $table->string('altura', 10)->nullable()->comment('Altura en metros');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vitals');
    }
};
