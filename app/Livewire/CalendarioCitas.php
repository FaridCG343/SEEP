<?php

namespace App\Livewire;

use App\Enum\EstadoCita;
use App\Enum\Rol;
use App\Models\Cita;
use App\Models\Medico;
use Livewire\Component;

class CalendarioCitas extends Component
{

    public $citas = [];

    public function mount()
    {
        $citas = Cita::with('paciente')->where('estatus', EstadoCita::PENDIENTE);

        if (auth()->user()->rol == Rol::Medico) {
            $medicoID = Medico::where('user_id', auth()->user()->id)->first()->id;
            $citas = $citas->where('medico_id', $medicoID);
        }

        $citas = collect($citas->get());

        $this->citas = $citas->map(function (Cita $cita) {
            // dd($cita->toArray());
            $cita = $cita->toArray();
            // cast the 'fecha_hora_cita' to a string for the fullcalendar
            $cita['fecha_hora_cita'] = (string) $cita['fecha_hora_cita'];
            return [
                'title' => 'Cita con ' . $cita['paciente']['nombre'] . ' ' . $cita['paciente']['apellido_paterno'],
                'start' => $cita['fecha_hora_cita'],
                'allDay' => false,
                "motivo" => $cita['motivo'],
            ];
        })->toArray();
        $this->dispatch('CitasCargadas', $this->citas);
    }

    public function render()
    {
        return view('livewire.calendario-citas');
    }
}
