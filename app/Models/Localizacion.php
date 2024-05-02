<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Localizacion extends Model
{
    use HasFactory;

    protected $table = 'localizaciones';

    /*
    $table->id();
            $table->string('nombre');
            $table->string('estado');
            $table->string('ciudad');
            $table->string('codigo_postal', 5);
            $table->string('colonia');
            $table->string('calle');
            $table->string('numero_exterior');
            $table->string('numero_interior')->nullable();
            $table->string('telefono', 10)->nullable();
            */
    protected $fillable = [
        'nombre',
        'estado',
        'ciudad',
        'codigo_postal',
        'colonia',
        'calle',
        'numero_exterior',
        'numero_interior',
        'telefono',
    ];

    public function getFullAddressAttribute()
    {
        return "{$this->calle} {$this->numero_exterior} {$this->numero_interior}, {$this->colonia}, {$this->ciudad}, {$this->estado}, {$this->codigo_postal}";
    }

    public function departamentos()
    {
        return $this->hasMany(Departamento::class);
    }
}
