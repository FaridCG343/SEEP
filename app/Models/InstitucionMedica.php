<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstitucionMedica extends Model
{
    use HasFactory;

    protected $table = 'instituciones_medicas';

    protected $fillable = [
        'nombre',
        'direccion_id',
        'tipo'
    ];

    public function direccion()
    {
        return $this->belongsTo(Direccion::class);
    }

    public function departamentos()
    {
        return $this->hasMany(Departamento::class);
    }
}
