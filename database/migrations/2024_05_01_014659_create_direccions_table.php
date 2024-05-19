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
        Schema::create('direcciones', function (Blueprint $table) {
            $table->id();
            $table->string('calle')->comment('Nombre de la calle');
            $table->string('numero_exterior')->comment('Número exterior de la dirección');
            $table->string('numero_interior')->nullable()->comment('Número interior de la dirección');
            $table->string('colonia')->comment('Nombre de la colonia');
            $table->string('codigo_postal', 5)->comment('Código postal de la dirección');
            $table->string('ciudad')->comment('Nombre de la ciudad');
            $table->string('estado')->comment('Nombre del estado');
            $table->string('telefono', 16)->nullable();
            $table->string('email', 50)->nullable()->unique();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('direccions');
    }
};
