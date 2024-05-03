<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Encuentro extends Model
{
    use HasFactory;

    // $table->foreignId('paciente_id')->constrained();
    //         $table->foreignId('medico_id')->constrained();
    //         $table->foreignId('institucion_medica_id')->constrained('instituciones_medicas');
    //         $table->foreignId('departamento_id')->constrained();
    //         $table->dateTime('fecha_inicio');
    //         $table->dateTime('fecha_fin');
    //         $table->enum('tipo', ['Consulta', 'Examen', 'Operación'])->default('Consulta');

    protected $fillable = [
        'paciente_id',
        'medico_id',
        'institucion_medica_id',
        'departamento_id',
        'fecha_inicio',
        'fecha_fin',
        'tipo',
    ];

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
