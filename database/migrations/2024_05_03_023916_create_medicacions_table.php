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
        Schema::create('medicaciones', function (Blueprint $table) {
            $table->id();
            $table->foreignId('paciente_id')->constrained();
            $table->foreignId('medico_id')->constrained();
            $table->string('medicamento', 255);
            $table->string('dosis', 50);
            $table->string('frecuencia', 50);
            $table->string('via_administracion', 50);
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->string('indicaciones', 255)->nullable();
            $table->enum('estatus', ['Activa', 'Inactiva', 'Cancelada'])->default('Activa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicacions');
    }
};
