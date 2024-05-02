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
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            $table->string('curp', 18)->unique();
            $table->string('nombre', 30);
            $table->string('ap_paterno', 30);
            $table->string('ap_materno', 30);
            $table->date('fecha_nacimiento');
            $table->string('sexo', 1);
            $table->string('email', 50)->unique();
            $table->index(['nombre', 'ap_paterno', 'ap_materno']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pacientes');
    }
};
