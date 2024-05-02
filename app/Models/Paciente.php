<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    /*
    $table->id();
    $table->string('curp', 18)->unique();
            $table->string('nombre', 30);
            $table->string('ap_paterno', 30);
            $table->string('ap_materno', 30);
            $table->date('fecha_nacimiento');
            $table->string('sexo', 1);
            $table->string('email', 50)->unique();
            $table->index(['nombre', 'ap_paterno', 'ap_materno']);*/

    protected $table = 'pacientes';

    protected $primaryKey = 'curp';

    protected $fillable = [
        'curp',
        'nombre',
        'ap_paterno',
        'ap_materno',
        'fecha_nacimiento',
        'sexo',
        'email',
    ];

    public function getFullNameAttribute()
    {
        return $this->nombre . ' ' . $this->ap_paterno . ' ' . $this->ap_materno;
    }

    public function citas()
    {
        return $this->hasMany(Cita::class);
    }

    public function alergias()
    {
        return $this->hasMany(Alergia::class);
    }

    public function enfermedades()
    {
        return $this->hasMany(Enfermedad::class);
    }

    public function medicamentos()
    {
        return $this->hasMany(Medicacion::class);
    }
}
