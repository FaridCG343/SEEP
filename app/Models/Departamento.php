<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;

    /*
    $table->id();
            $table->string('nombre');
            $table->string('descripcion')->nullable();
            $table->foreignId('localizacion_id')->references('id')->on('localizaciones')->onDelete('restrict');
            $table->string('telefono', 10)->nullable();
            */

    protected $fillable = [
        'nombre',
        'descripcion',
        'localizacion_id',
        'telefono',
    ];

    public function localizacion()
    {
        return $this->belongsTo(Localizacion::class);
    }

    public function user()
    {
        return $this->hasMany(User::class);
    }
}
