<?php

use App\Enum\TipoCita as EnumTipoCita;
use App\Models\TipoCita;
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
        Schema::create('tipo_citas', function (Blueprint $table) {
            $table->id();
            $table->string('Descripcion');
            $table->timestamps();
        });

        collect(EnumTipoCita::toArray())->each(
            fn (string $descripcion) => TipoCita::create(['Descripcion' => $descripcion])
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipo_citas');
    }
};
