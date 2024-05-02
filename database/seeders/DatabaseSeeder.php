<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Enum\Rol;
use App\Models\Administrador;
use App\Models\Departamento;
use App\Models\Localizacion;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // $table->string('nombre');
        // $table->string('estado');
        // $table->string('ciudad');
        // $table->string('codigo_postal', 5);
        // $table->string('colonia');
        // $table->string('calle');
        // $table->string('numero_exterior');
        // $table->string('numero_interior')->nullable();
        // $table->string('telefono', 10)->nullable();
        $localizacion = new Localizacion([
            'nombre' => 'Similares',
            'estado' => 'CDMX',
            'ciudad' => 'CDMX',
            'codigo_postal' => '12345',
            'colonia' => 'Colonia',
            'calle' => 'Calle',
            'numero_exterior' => '123',
            'telefono' => '1234567890',
        ]);

        $localizacion->save();

        $departamento = new Departamento([
            'nombre' => 'Departamento',
            'localizacion_id' => $localizacion->id,
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

        $admin = new Administrador([
            "staff_id" => $user->id,
        ]);

        $admin->save();
    }
}
