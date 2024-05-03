<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacuna extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'dosis',
        'fecha_aplicacion',
        'paciente_id',
        'medico_id',
        'institucion_medica_id',
        'lote',
    ];

    public function paciente()
    {
        return $this->belongsTo(Paciente::class);
    }
}
