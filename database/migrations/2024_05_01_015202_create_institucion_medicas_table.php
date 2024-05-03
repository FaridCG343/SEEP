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
        Schema::create('instituciones_medicas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->foreignId('direccion_id')->constrained('direcciones');
            $table->enum('tipo', ['hospital', 'clinica', 'consultorio', 'laboratorio', 'especialidad'])->comment('Tipo de institución médica, puede ser: hospital, clinica, consultorio, laboratorio o especialidad');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('institucion_medicas');
    }
};
