<?php

namespace App\Livewire;

use Livewire\Component;

class AgendarCitas extends Component
{
    public $pacienteId;

    public $fecha;

    public $hora;

    public $medicoId;

    public $tipo;

    public $motivo;

    public function render()
    {
        return view('livewire.agendar-citas');
    }
}
