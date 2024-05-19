<?php

namespace App\Enum;


enum Rol: string
{
    case Medico = 'Medico';
    case Enfermero = 'Enfermero';
    case Administrador = 'Administrador';
    case Operador = "Operador";
}
