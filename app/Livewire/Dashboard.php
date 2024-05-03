<?php

namespace App\Livewire;

use App\Models\Paciente;
use Livewire\Component;
use Livewire\WithPagination;

class Dashboard extends Component
{
    use WithPagination;

    public $headers = [
        ['key' => 'id', 'label' => '#'],
        ['key' => 'nombre', 'label' => 'Nombre'],
        ['key' => 'apellido_paterno', 'label' => 'Apellido Paterno'],
        ['key' => 'apellido_materno', 'label' => 'Apellido Materno'],
        ['key' => 'curp', 'label' => 'CURP'],
        ['key' => 'sexo', 'label' => 'Sexo'],
        ['key' => 'fecha_nacimiento', 'label' => 'Fecha de Nacimiento'],
        ['key' => 'direccion_id', 'label' => 'Dirección'],
        ['key' => 'email', 'label' => 'Email'],
    ];

    public function render()
    {
        return view('livewire.dashboard', [
            'pacientes' => Paciente::paginate(10),
        ]);
    }
}
