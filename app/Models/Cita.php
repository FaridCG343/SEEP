<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    use HasFactory;

    protected $fillable = [
        'paciente_id',
        'medico_id',
        'institucion_medica_id',
        'departamento_id',
        'fecha_hora_cita',
        'tipo',
        'estatus',
        'motivo',
    ];

    protected $dates = [
        'fecha_hora_cita',
    ];

    protected static function newFactory()
    {
        return \Database\Factories\CitaFactory::new();
    }

    public function paciente()
    {
        return $this->belongsTo(Paciente::class);
    }

    public function medico()
    {
        return $this->belongsTo(Medico::class);
    }

    public function institucionMedica()
    {
        return $this->belongsTo(InstitucionMedica::class);
    }

    public function departamento()
    {
        return $this->belongsTo(Departamento::class);
    }
}
