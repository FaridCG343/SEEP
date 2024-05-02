<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enfermero extends Model
{
    use HasFactory;

    protected $table = 'enfermeros';

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
