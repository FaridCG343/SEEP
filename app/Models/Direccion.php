<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    use HasFactory;

    protected $table = 'direcciones';

    protected $fillable = [
        'calle',
        'numero_exterior',
        'numero_interior',
        'colonia',
        'codigo_postal',
        'municipio',
        'estado',
        'telefono',
    ];

    public function pacientes()
    {
        return $this->hasMany(Paciente::class);
    }

    public function medicos()
    {
        return $this->hasMany(Medico::class);
    }

    public function instituciones()
    {
        return $this->hasMany(InstitucionMedica::class);
    }
}
