<?php

namespace App\Livewire;

use App\Enum\EstadoCita;
use App\Enum\Rol;
use App\Models\Cita;
use App\Models\InstitucionMedica;
use App\Models\Medico;
use App\Models\Paciente;
use App\Models\TipoCita;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Livewire\Component;

class AgendarCitas extends Component
{
    public Collection $pacientes;

    public ?int $pacienteId = null;

    public $fecha;

    public $fechaOptions = [];

    public $horasDisponibles = [];

    public $hora;

    public Collection $medicos;

    public ?int $medicoId = null;

    public $tipos;

    public $tipo;

    public $motivo;

    public Collection $instituciones;

    public ?int $institucionId = null;

    public $departamentos = [];

    public ?int $departamentoId = null;

    public function mount($pacienteId = null)
    {
        $this->fechaOptions = [
            'minDate' => now()->format('Y-m-d'),
            'format' => 'Y-m-d',
        ];
        $this->tipos = TipoCita::all()->map(function ($tipo) {
            return [
                'id' => $tipo->id,
                'name' => $tipo->Descripcion,
            ];
        });
        $this->instituciones = InstitucionMedica::all()->take(5)->map(function ($institucion) {
            return [
                'id' => $institucion->id,
                'name' => $institucion->nombre,
            ];
        });
        $paciente = Paciente::find($pacienteId);
        $this->pacientes = Paciente::all()
            ->take(5)
            ->merge($paciente ? [$paciente] : [])
            ->map(function ($paciente) {
                return [
                    'id' => $paciente->id,
                    'name' => $paciente->nombre . ' ' . $paciente->apellido_paterno . ' ' . $paciente->apellido_materno,
                ];
            });
        $this->pacienteId = $pacienteId;
        $this->medicos = Medico::query()
            ->join('staff', 'staff.id', '=', 'medicos.staff_id')
            ->where('rol', Rol::Medico)
            ->select('medicos.id', 'nombre')
            ->take(5)
            ->get()
            ->map(function ($medico) {
                return [
                    'id' => $medico->id,
                    'name' => $medico->nombre,
                ];
            });
    }

    public function updatedFecha($fecha)
    {
        $this->actualizarHorasDisponibles();
    }

    public function updatedMedicoId($medicoId)
    {
        $this->actualizarHorasDisponibles();
    }

    public function updatedInstitucionId($institucionId)
    {
        $this->departamentos = InstitucionMedica::find($institucionId)?->departamentos?->map(function ($departamento) {
            return [
                'id' => $departamento->id,
                'name' => $departamento->nombre,
            ];
        }) ?? [];
    }

    public function actualizarHorasDisponibles()
    {
        if (!$this->fecha || !$this->medicoId) {
            return;
        }
        // Buscar las citas del médico en la fecha seleccionada
        $medico = Medico::find($this->medicoId);
        $citas = $medico->citas()->whereRaw('CAST(fecha_hora_cita AS DATE) = ?', [$this->fecha])->get();
        // Las horas son de 8:00 a 20:00 y cada 30 minutos
        $horas = [];
        for ($hora = 8; $hora < 20; $hora++) {
            $horas[] = str_pad($hora, 2, '0', STR_PAD_LEFT) . ':00';
            $horas[] = str_pad($hora, 2, '0', STR_PAD_LEFT) . ':30';
        }
        $horasDisponibles = [];
        foreach ($horas as $hora) {
            $horaDisponible = true;
            foreach ($citas as $cita) {
                if ($cita->fecha_hora_cita->format('H:i') === $hora) {
                    $horaDisponible = false;
                    break;
                }
            }
            if ($horaDisponible) {
                $horasDisponibles[] = [
                    'id' => $hora,
                    'name' => $hora . ' - ' . date('H:i', strtotime($hora . ' + 30 minutes')),
                ];
            }
        }
        $this->horasDisponibles = $horasDisponibles;
    }

    public function searchInstituciones(string $value = '')
    {
        $institucion = InstitucionMedica::where('id', $this->institucionId)->first();
        $this->instituciones = InstitucionMedica::query()
            ->where('nombre', 'like', "%$value%")
            ->take(5)
            ->get()
            ->merge($institucion ? [$institucion] : [])
            ->map(function ($institucion) {
                return [
                    'id' => $institucion->id,
                    'name' => $institucion->nombre,
                ];
            });
    }

    public function searchPacientes(string $value = '')
    {
        $paciente = Paciente::where('id', $this->pacienteId)->first();
        $this->pacientes = Paciente::query()
            ->where('nombre', 'like', "%$value%")
            ->take(5)
            ->get()
            ->merge($paciente ? [$paciente] : [])
            ->map(function ($paciente) {
                return [
                    'id' => $paciente->id,
                    'name' => $paciente->nombre . ' ' . $paciente->apellido_paterno . ' ' . $paciente->apellido_materno,
                ];
            });
    }

    public function searchMedicos(string $value = '')
    {
        $this->medicos = Medico::query()
            ->join('staff', 'staff.id', '=', 'medicos.staff_id')
            ->where('nombre', 'like', "%$value%")
            ->where('rol', Rol::Medico)
            ->select('medicos.id', 'nombre')
            ->take(5)
            ->get()
            ->map(function ($medico) {
                return [
                    'id' => $medico->id,
                    'name' => $medico->nombre,
                ];
            });
    }

    public function agendarCita()
    {
        $this->validate([
            'fecha' => 'required|date',
            'hora' => 'required|date_format:H:i',
            'medicoId' => 'required|exists:medicos,id',
            'tipo' => 'required|exists:tipo_citas,id',
            'motivo' => 'required|string',
            'departamentoId' => 'required|exists:departamentos,id',
            'pacienteId' => 'required|exists:pacientes,id',
            'institucionId' => 'required|exists:instituciones_medicas,id',
        ]);

        $medico = Medico::find($this->medicoId);

        $fecha = Carbon::parse($this->fecha)->setHour(substr($this->hora, 0, 2))->setMinute(substr($this->hora, 3, 2))->format('Y-m-d H:i');
        $cita = Cita::create([
            'paciente_id' => $this->pacienteId,
            'medico_id' => $this->medicoId,
            'institucion_medica_id' => $this->institucionId,
            'departamento_id' => $this->departamentoId,
            'fecha_hora_cita' => $fecha,
            'tipo_id' => $this->tipo,
            'motivo' => $this->motivo,
            'estatus' => EstadoCita::PENDIENTE,
        ]);
        $this->dispatch('info', message: 'Cita agendada correctamente');
        $this->reset([
            'fecha',
            'hora',
            'medicoId',
            'tipo',
            'motivo',
            'departamentoId',
            'pacienteId',
            'institucionId'
        ]);
    }

    public function render()
    {
        return view('livewire.agendar-citas');
    }
}
