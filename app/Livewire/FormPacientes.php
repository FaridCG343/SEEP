<?php

namespace App\Livewire;

use App\Models\Direccion;
use Livewire\Component;
use Exception;
use Illuminate\Support\Facades\DB;

class FormPacientes extends Component
{
    //definir las variables 
    public $nombre;

    public $apellidoP;

    public $apellidoM;

    public $curp;

    public $sexo = 'H';

    public $fechaNac;

    public $calle;

    public $numExt;

    public $numInt;

    public $colonia;

    public $codigoPost;

    public $ciudad;

    public $estado;

    public $telefono;

    public $email;

    public $showModal = false;
    public $messageTitle = '';
    public $messageContent = '';
    public $buttonText = 'Cerrar';

    public $sexoOption = [
        [
            "id" => 'H',
            'name' => 'Hombre'
        ],
        [
            "id" => 'M',
            'name' => 'Mujer'
        ],
        [
            "id" => 'O',
            'name' => 'Otro'
        ],
    ];

    public function store()
    {
        $this->validate([
            'nombre' => 'required|string',
            'apellidoP' => 'required|string',
            'apellidoM' => 'required|string', //dude aqui puede cambiar, que tal si solo tiene un apellido? 
            'curp' => 'required|size:18|regex:/^[A-Z]{4}[0-9]{6}[HM][A-Z]{5}[A-Za-z0-9]{2}$/',
            'sexo' => 'required',
            'fechaNac' => 'required|date',
            'calle' => 'required',
            'numExt' => 'required|numeric',
            'numInt' => 'nullable|numeric',
            'colonia' => 'required',
            'codigoPost' => 'required|numeric',
            'ciudad' => 'required',
            'estado' => 'required',
            'telefono' => 'required|string|max:12',
            'email' => 'required|email',
        ], [
            'nombre.required' => 'El campo nombre es obligatorio.',
            'nombre.string' => 'Ingrese un nombre valido',

            'apellidoP.required' => 'El campo apellido paterno es obligatorio.',
            'apellidoP.string' => 'Ingrese un apellido valido',

            'apellidoM.required' => 'El campo apellido materno es obligatorio.',
            'apellidoM.string' => 'Ingrese un apellido valido',

            'curp.required' => 'El campo curp es obligatorio',
            'curp.size' => 'El campo curp debe contar con 18 caracteres',
            'curp.regex' => 'El campo curp debe ser valido',

            'sexo.required' => 'debe elegir una opcion',

            'fechaNac.required' => 'Ingrese la fecha de nacimiento',

            'calle.required' => 'El campo calle es obligatorio',

            'numExt.required' => 'El numero exterior es obligatorio',
            'numExt.numeric' => 'El campo solo debe contener numeros',

            'numInt.required' => 'El numero interior es obligatorio',
            'numInt.numeric' => 'El campo solo debe contener numeros',

            'colonia.required' => 'El campo colonia es obligatorio',

            'codigoPost.required' => 'El campo codigo postal es obligatorio',
            'codigoPost.numeric' => 'El campo solo debe contener numeros',
            'codigoPost.size' => 'El campo solo debe contener 5 caracteres',

            'ciudad.required' => 'El campo ciudad es obligatorio',

            'estado.required' => 'El campo estado es obligatorio',

            'telefono.required' => 'El campo telefono es obligatorio',
            'telefono.numeric' => 'El campo solo debe contener numeros',
            'telefono.size' => 'El campo solo debe contener 12 caracteres',

            'email.required' => 'El campo email es obligatorio',
            'email.email' => 'El campo debe contener un email valido',


        ]);
        DB::beginTransaction();
        try {
            $direccion = new Direccion([
                'calle' => $this->calle,
                'numero_exterior' => $this->numExt,
                'numero_interior' => $this->numInt,
                'colonia' => $this->colonia,
                'codigo_postal' => $this->codigoPost,
                'ciudad' => $this->ciudad,
                'estado' => $this->estado,
                'telefono' => $this->telefono,
                'email' => $this->email,
            ]);

            $direccion->save();

            $paciente = $direccion->pacientes()->create([
                'nombre' => $this->nombre,
                'apellido_paterno' => $this->apellidoP,
                'apellido_materno' => $this->apellidoM,
                'curp' => $this->curp,
                'sexo' => $this->sexo,
                'fecha_nacimiento' => $this->fechaNac,
            ]);

            $paciente->save();
            //$this->dispatch('info', message: '¡Paciente registrado correctamente!');
            DB::commit();
            $this->messageTitle = 'Paciente Agregado';
            $this->messageContent = 'El paciente ha sido agregado exitosamente.';
            $this->buttonText = 'Cerrar';
            $this->showModal = true;
        } catch (Exception $e) {
            DB::rollBack();
            $this->messageTitle = 'Error';
            $this->messageContent = 'Ha ocurrido un error al intentar agregar el paciente.';
            $this->buttonText = 'Cerrar';
            $this->showModal = true;
        }
        $this->resetExcept('showModal', 'messageTitle', 'messageContent', 'buttonText');
    }

    public function render()
    {

        return view('livewire.form-pacientes');
    }
}
