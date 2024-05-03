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
        Schema::create('encuentro_diagnosticos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('encuentro_id')->constrained();
            $table->foreignId('diagnostico_id')->constrained();
            $table->foreignId('paciente_id')->constrained();
            $table->string('observaciones', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('encuentro_diagnosticos');
    }
};
