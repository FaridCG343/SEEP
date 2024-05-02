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
        Schema::create('diagnosticos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cita_id')->constrained()->onDelete('restrict');
            $table->foreignId('enfermedad_id')->constrained('enfermedades')->onDelete('restrict');
            $table->string('observaciones', 100);
            $table->dateTime('fecha_diagnostico');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diagnosticos');
    }
};
