<?php

namespace App\Enum;

enum TipoCita: string
{
    case CONSULTA_GENERAL = 'Consulta General';
    case CONSULTA_ESPECIALIDAD = 'Consulta de Especialidad';
    case CONSULTA_URGENCIAS = 'Consulta de Urgencias';
    case CONSULTA_SEGUIMIENTO = 'Consulta de Seguimiento';
    case CONSULTA_PREVENTIVA = 'Consulta Preventiva';
    case CONSULTA_DOMICILIARIA = 'Consulta Domiciliaria';
    case CONSULTA_VIRTUAL = 'Consulta Virtual';
    case CONSULTA_SEGUNDA_OPINION = 'Consulta de Segunda Opinión';
    case CONSULTA_RESULTADOS = 'Consulta de Resultados';
    case CONSULTA_PREOPERATORIA = 'Consulta Preoperatoria';
    case CONSULTA_POSTOPERATORIA = 'Consulta Postoperatoria';
    case CONSULTA_EVALUACION_RIESGO = 'Consulta de Evaluación de Riesgo';
    case CONSULTA_SALUD_MENTAL = 'Consulta de Salud Mental';
    case CONSULTA_NUTRICION = 'Consulta de Nutrición';
    case CONSULTA_FISIOTERAPIA = 'Consulta de Fisioterapia';
    case CONSULTA_REHABILITACION = 'Consulta de Rehabilitación';
    case CONSULTA_PEDIATRICA = 'Consulta Pediátrica';
    case CONSULTA_GERIATRICA = 'Consulta Geriátrica';
    case CONSULTA_OBSTETRICIA_GINECOLOGIA = 'Consulta de Obstetricia/Ginecología';
    case CONSULTA_DERMATOLOGIA = 'Consulta de Dermatología';

    public static function toArray()
    {
        $values = [];
        foreach (static::cases() as $case) {
            $values[] = $case->value;
        }
        return $values;
    }
}
