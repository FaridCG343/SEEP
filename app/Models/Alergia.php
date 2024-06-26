<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alergia extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipo',
        'alergeno',
        'paciente_id',
        'grado',
        'tratamiento',
        'fecha_deteccion',
        'estatus',
    ];

    public function paciente()
    {
        return $this->belongsTo(Paciente::class);
    }
}
