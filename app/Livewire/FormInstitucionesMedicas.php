<?php

namespace App\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class FormInstitucionesMedicas extends Component
{
    public $nombre;

    public $tipos = [
        [
            'id' => 'hospital',
            'name' => 'Hospital'
        ],
        [
            'id' => 'clinica',
            'name' => 'Clínica'
        ],
        [
            'id' => 'consultorio',
            'name' => 'Consultorio'
        ],
        [
            'id' => 'laboratorio',
            'name' => 'Laboratorio'
        ],
        [
            'id' => 'especialidad',
            'name' => 'Especialidad'
        ]
    ];

    public $calle;

    public $numero_exterior;

    public $numero_interior;

    public $colonia;

    public $codigo_postal;

    public $ciudad;

    public $estado;

    public $telefono;

    public $email;

    public $tipo;

    public function registrarInstit()
    {
        $this->validate([
            'nombre' => 'required',
            'calle' => 'required',
            'numero_exterior' => 'required',
            'numero_interior' => 'required',
            'colonia' => 'required',
            'codigo_postal' => 'required',
            'ciudad' => 'required',
            'estado' => 'required',
            'telefono' => 'required',
            'email' => 'required|email',
            'tipo' => 'required'
        ]);
        DB::beginTransaction();

        try {
            $direccion = \App\Models\Direccion::create([
                'calle' => $this->calle,
                'numero_exterior' => $this->numero_exterior,
                'numero_interior' => $this->numero_interior,
                'colonia' => $this->colonia,
                'codigo_postal' => $this->codigo_postal,
                'ciudad' => $this->ciudad,
                'estado' => $this->estado,
                'telefono' => $this->telefono,
                'email' => $this->email
            ]);

            \App\Models\InstitucionMedica::create([
                'nombre' => $this->nombre,
                'direccion_id' => $direccion->id,
                'tipo' => $this->tipo
            ]);
            DB::commit();
            $this->dispatch('info', message: 'Usuario registrado exitosamente');
        } catch (\Exception $e) {
            DB::rollback();
            // notificar al usuario
        }

        $this->reset();
    }

    public function render()
    {
        return view('livewire.form-instituciones-medicas');
    }

    //no se almacenan las nuevas instituciones
}
