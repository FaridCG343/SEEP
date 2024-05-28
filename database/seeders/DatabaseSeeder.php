<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Enum\Rol;
use App\Models\Administrador;
use App\Models\Cita;
use App\Models\Departamento;
use App\Models\Direccion;
use App\Models\Especialidad;
use App\Models\InstitucionMedica;
use App\Models\Localizacion;
use App\Models\Medico;
use App\Models\Paciente;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $direccion = new Direccion([
            'calle' => 'Calle',
            'numero_exterior' => '123',
            'numero_interior' => '123',
            'colonia' => 'Colonia',
            'codigo_postal' => '12345',
            'ciudad' => 'CDMX',
            'estado' => 'CDMX',
            'telefono' => '1234567890',
        ]);

        $especialidad = new Especialidad([
            'nombre' => 'Medicina General',
        ]);

        $especialidad->save();

        $direccion->save();

        $institucion = $direccion->instituciones()->create([
            'nombre' => 'Similares',
            'tipo' => 'hospital',
        ]);

        $departamento = new Departamento([
            'nombre' => 'Departamento',
            'institucion_medica_id' => $institucion->id,
            'especialidad_id' => $especialidad->id,
        ]);

        $departamento->save();

        $user = new User([
            'nombre' => 'Farid',
            'apellido_paterno' => 'Castillo',
            'apellido_materno' => 'Gonzalez',
            'email' => 'faridglez17@gmail.com',
            'password' => 'password',
            'rol' => Rol::Administrador,
            'telefono' => '1234567890',
            'departamento_id' => $departamento->id,
        ]);

        $user->save();

        $user = new User([
            'nombre' => 'Erika',
            'apellido_paterno' => 'Gomez',
            'apellido_materno' => 'Allende',
            'email' => 'eri.sushie@gmail.com',
            'password' => 'erikita123',
            'rol' => Rol::Medico,
            'telefono' => '1234567890',
            'departamento_id' => $departamento->id,
        ]);

        $user->save();

        $medico = new Medico([
            'cedula_profesional' => '1234567890',
            'staff_id' => $user->id,
            'especialidad_id' => $especialidad->id,
            'departamento_id' => $departamento->id,
        ]);

        $medico->save();

        Paciente::factory(20)->create();

        Cita::factory(20)->create();
    }
}
