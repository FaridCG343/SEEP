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
        Schema::create('vacunas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->date('fecha_aplicacion');
            $table->foreignId('paciente_id')->constrained();
            $table->foreignId('medico_id')->constrained()->nullable();
            $table->foreignId('institucion_medica_id')->constrained('instituciones_medicas')->nullable();
            $table->string('lote', 50)->nullable();
            $table->string('dosis', 50)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vacunas');
    }
};
