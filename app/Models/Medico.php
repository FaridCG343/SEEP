<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    use HasFactory;

    /*
    $table->foreignId('staff_id')->primary()->constrained()->onDelete('cascade');
            $table->string('especialidad');
            */

    protected $table = 'medicos';

    protected $primaryKey = 'staff_id';

    protected $fillable = [
        'staff_id',
        'especialidad',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function citas()
    {
        return $this->hasMany(Cita::class);
    }
}
