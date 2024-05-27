<?php

namespace Tests\Feature;

use Tests\TestCase;
use Livewire\Livewire;
use App\Models\Direccion;
use Illuminate\Foundation\Testing\RefreshDatabase;

class FormPacientesTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_create_a_patient()
    {
        Livewire::test('form-pacientes')
            ->set('nombre', 'Juan')
            ->set('apellidoP', 'Pérez')
            ->set('apellidoM', 'González')
            ->set('curp', 'JUPG010101HDFRNN01')
            ->set('sexo', 'H')
            ->set('fechaNac', '2000-01-01')
            ->set('calle', 'Calle Falsa')
            ->set('numExt', '123')
            ->set('numInt', '456')
            ->set('colonia', 'Colonia Falsa')
            ->set('codigoPost', '12345')
            ->set('ciudad', 'Ciudad Falsa')
            ->set('estado', 'Estado Falso')
            ->set('telefono', '1234567890')
            ->set('email', 'correo@example.com')
            ->call('store')
            ->assertDispatched('info', ['message' => '¡Paciente registrado correctamente!']);

        $this->assertDatabaseHas('direccions', [
            'calle' => 'Calle Falsa',
            'numero_exterior' => '123',
            'numero_interior' => '456',
            'colonia' => 'Colonia Falsa',
            'codigo_postal' => '12345',
            'ciudad' => 'Ciudad Falsa',
            'estado' => 'Estado Falso',
            'telefono' => '1234567890',
            'email' => 'correo@example.com',
        ]);

        $this->assertDatabaseHas('pacientes', [
            'nombre' => 'Juan',
            'apellido_paterno' => 'Pérez',
            'apellido_materno' => 'González',
            'curp' => 'JUPG010101HDFRNN01',
            'sexo' => 'H',
            'fecha_nacimiento' => '2000-01-01',
        ]);
    }

    /** @test */
    public function it_requires_a_valid_curp()
    {
        Livewire::test('form-pacientes')
            ->set('nombre', 'Juan')
            ->set('apellidoP', 'Pérez')
            ->set('apellidoM', 'González')
            ->set('curp', 'INVALIDCURP')
            ->set('sexo', 'H')
            ->set('fechaNac', '2000-01-01')
            ->set('calle', 'Calle Falsa')
            ->set('numExt', '123')
            ->set('numInt', '456')
            ->set('colonia', 'Colonia Falsa')
            ->set('codigoPost', '12345')
            ->set('ciudad', 'Ciudad Falsa')
            ->set('estado', 'Estado Falso')
            ->set('telefono', '1234567890')
            ->set('email', 'correo@example.com')
            ->call('store')
            ->assertHasErrors(['curp' => 'regex']);
    }
}
