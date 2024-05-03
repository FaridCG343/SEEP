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
        Schema::create('encuentro_procedimientos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('encuentro_id')->constrained();
            $table->foreignId('procedimiento_id')->constrained();
            $table->foreignId('paciente_id')->constrained();
            $table->date('fecha_orden');
            $table->date('fecha_realizacion')->nullable();
            $table->enum('estatus', ['Pendiente', 'Realizado', 'Cancelado', 'Revizado'])->default('Pendiente')->comment('Estatus del procedimiento en el encuentro, si fue realizado, cancelado o revizado por el médico');
            $table->string('observaciones', 255)->nullable();
            $table->foreignId('encuentro_revision_id')->nullable()->constrained('encuentros')->comment('ID del encuentro en el que se revisó el procedimiento');
            $table->foreignId('documento_id')->nullable()->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('encuentro_procedimientos');
    }
};
