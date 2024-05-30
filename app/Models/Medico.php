<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    use HasFactory;

    protected $fillable = [
        'staff_id',
        'especialidad',
        'cedula_profesional',
        'departamento_id',
        'email',
    ];

    public function staff()
    {
        return $this->belongsTo(User::class);
    }

    public function especialidad()
    {
        return $this->belongsTo(Especialidad::class);
    }

    public function departamento()
    {
        return $this->belongsTo(Departamento::class);
    }

    public function citas()
    {
        return $this->hasMany(Cita::class);
    }
}
