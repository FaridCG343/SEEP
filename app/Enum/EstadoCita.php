<?php

namespace App\Enum;

enum EstadoCita: string {
    case PENDIENTE = 'Pendiente';
    case ATENDIDA = 'Atendida';
    case CANCELADA = 'Cancelada';
    case NO_ASISTIO = 'No asistió';
    case COMPLETADA = 'Completada';
}