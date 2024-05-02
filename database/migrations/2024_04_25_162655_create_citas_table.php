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
            $table->foreignId('paciente_id')->constrained()->onDelete('restrict');
            $table->foreignId('medico_id')->constrained("medicos", "staff_id")->onDelete('restrict');
            $table->dateTime('fecha_programada');
            $table->string('motivo', 100);
            $table->dateTime('fecha_atencion')->nullable();
            $table->dateTime('fecha_cancelacion')->nullable();
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
