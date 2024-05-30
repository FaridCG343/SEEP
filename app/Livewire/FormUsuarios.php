<?php

namespace App\Livewire;

use App\Models\Departamento;
use App\Models\Especialidad;
use App\Models\InstitucionMedica;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class FormUsuarios extends Component
{
    public $nombre;

    public $apellido_paterno;

    public $apellido_materno;

    public $email;

    public $password;

    public $rol;

    public $rols = [
        [
            'id' => 'Medico',
            'name' => 'Medico'
        ],
        [
            'id' => 'Enfermero',
            'name' => 'Enfermero'
        ],
        [
            'id' => 'Administrador',
            'name' => 'Administrador'
        ],
        [
            'id' => 'Operador',
            'name' => 'Operador'
        ]
    ];

    public $telefono;

    public $instituciones;

    public $instituciones_id;

    public $departamentos;

    public $departamento_id;

    public $cedula_profesional;

    public $especialidades;

    public $especialidad_id;

    public function mount()
    {
        $this->departamentos = Departamento::all();
        $this->instituciones = InstitucionMedica::all();
        $this->especialidades = Especialidad::all();
    }

    public function updatedInstitucionesId($value)
    {
        $this->departamentos = Departamento::where('institucion_medica_id', $value)->get();
    }

    public function save()
    {
        $this->validate([
            'nombre' => 'required',
            'apellido_paterno' => 'required',
            'apellido_materno' => 'required',
            'email' => 'required|email|unique:staff,email',
            'password' => 'required',
            'rol' => 'required',
            'telefono' => 'nullable',
            'instituciones_id' => 'required',
            'departamento_id' => 'required',
            'cedula_profesional' => 'required|unique:medicos,cedula_profesional',
            'especialidad_id' => 'required'
        ]);

        DB::beginTransaction();

        try {
            $staff = new User([
                'nombre' => $this->nombre,
                'apellido_paterno' => $this->apellido_paterno,
                'apellido_materno' => $this->apellido_materno,
                'email' => $this->email,
                'password' => $this->password,
                'rol' => $this->rol,
                'telefono' => $this->telefono,
                'departamento_id' => $this->departamento_id
            ]);

            $staff->save();

            if ($this->rol === 'Medico') {
                $staff->medico()->create([
                    'cedula_profesional' => $this->cedula_profesional,
                    'especialidad_id' => $this->especialidad_id
                ]);
            }
        } catch (\Exception $e) {
            DB::rollBack();
            // send error
        }
        DB::commit();
        // send success
    }

    public function render()
    {
        return view('livewire.form-usuarios');
    }
}
