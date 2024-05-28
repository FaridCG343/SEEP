<?php

namespace App\Livewire;

use App\Models\Cita;
use App\Models\InstitucionMedica;
use App\Models\Medico;
use App\Models\TipoCita;
use Livewire\Component;

class AgendarCitas extends Component
{
    public $pacienteSearch;

    public $pacientes;

    public $pacienteId;

    public $fechaHora;

    public $medicoSearch;

    public $medicos;

    public $medicoId;

    public $tipos;

    public $tipo;

    public $motivo;

    public $instituciones;

    public $institucionId;

    public $departamentos;

    public $departamentoId;

    public function mount($pacienteId = null)
    {
        $this->tipos = TipoCita::all()->map(function ($tipo) {
            return [
                'id' => $tipo->id,
                'name' => $tipo->Descripcion,
            ];
        });
        $this->instituciones = InstitucionMedica::all()->map(function ($institucion) {
            return [
                'id' => $institucion->id,
                'name' => $institucion->nombre,
            ];
        });
        $this->pacienteId = $pacienteId;
    }

    public function updatedInstitucionesId($institucionId)
    {
        $this->departamentos = InstitucionMedica::find($institucionId)->departamentos->map(function ($departamento) {
            return [
                'id' => $departamento->id,
                'name' => $departamento->nombre,
            ];
        });
    }

    public function agendarCita()
    {
        $this->validate([
            'fechaHora' => 'required|datetime',
            'medicoId' => 'required|exists:medicos,id',
            'tipo' => 'required|exists:tipos_citas,id',
            'motivo' => 'required|string',
        ]);

        $medico = Medico::find($this->medicoId);

        $cita = Cita::create([
            'paciente_id' => $this->pacienteId,
            'medico_id' => $this->medicoId,
            'institucion_medica_id' => $medico->institucion_medica_id,
            'departamento_id' => $this->departamentoId,
            'fecha_hora_cita' => $this->fechaHora,
            'tipo_id' => $this->tipo,
            'motivo' => $this->motivo,
        ]);

        $this->reset(['fecha', 'hora', 'medicoId', 'tipo', 'motivo']);
    }

    public function render()
    {
        return view('livewire.agendar-citas');
    }
}
