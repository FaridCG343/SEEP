<?php

namespace App\Models;

use Database\Factories\PacienteFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'apellido_paterno',
        'apellido_materno',
        'curp',
        'sexo',
        'fecha_nacimiento',
        'direccion_id',
    ];

    protected static function newFactory()
    {
        return PacienteFactory::new();
    }

    public function direccion()
    {
        return $this->belongsTo(Direccion::class);
    }

    public function alergias()
    {
        return $this->hasMany(Alergia::class);
    }

    public function vacunas()
    {
        return $this->hasMany(Vacuna::class);
    }

    public function citas()
    {
        return $this->hasMany(Cita::class);
    }

    public function encuentros()
    {
        return $this->hasMany(Encuentro::class);
    }

    public function medicaciones()
    {
        return $this->hasMany(Medicacion::class);
    }

    public function documentos()
    {
        return $this->hasMany(Documento::class);
    }

    public function procedimientos()
    {
        return $this->hasMany(Procedimiento::class);
    }

    public function diagnosticos()
    {
        return $this->hasMany(Diagnostico::class);
    }

    public function laboratorios()
    {
        return $this->hasMany(Laboratorio::class);
    }
}
