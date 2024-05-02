<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactoEmergencia extends Model
{
    use HasFactory;

    protected $table = 'contactos_emergencia';


    public function telefono(): Attribute
    {
        return Attribute::make(
            get: function ($value) {
                return preg_replace('/(\d{3})(\d{3})(\d{4})/', '($1) $2-$3', $value);
            },
            set: function ($value) {
                return preg_replace('/\D/', '', $value);
            }
        );
    }
}
