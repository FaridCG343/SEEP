<?php

namespace App\Livewire;

use App\Models\Departamento;
use App\Models\Especialidad;
use App\Models\InstitucionMedica;
use Livewire\Component;

class FormDepartamentos extends Component
{
    public $nombre;

    public $instituciones;

    public $institucion_medica_id;

    public $descripcion;

    public $telefono;

    public $escpecialidades;

    public $especialidad_id;

    public function searchInstituciones(string $value = '')
    {
        $this->instituciones = InstitucionMedica::where('nombre', 'LIKE', "%$value%")->take(5)->get()?->map(function ($institucion) {
            return [
                'id' => $institucion->id,
                'nombre' => $institucion->nombre
            ];
        }) ?? [];
    }

    public function mount()
    {
        $this->escpecialidades = Especialidad::all()->map(function ($especialidad) {
            return [
                'id' => $especialidad->id,
                'nombre' => $especialidad->nombre
            ];
        });
    }

    public function save()
    {
        $this->validate([
            'nombre' => 'required',
            'institucion_medica_id' => 'required',
            'descripcion' => 'required',
            'telefono' => 'required',
            'especialidad_id' => 'required'
        ]);

        $departamento = Departamento::create([
            'nombre' => $this->nombre,
            'institucion_medica_id' => $this->institucion_medica_id,
            'descripcion' => $this->descripcion,
            'telefono' => $this->telefono,
            'especialidad_id' => $this->especialidad_id
        ]);

        $this->reset();

        $this->emit('departamentoCreated', $departamento->id);
    }

    public function render()
    {
        return view('livewire.form-departamentos');
    }
}
