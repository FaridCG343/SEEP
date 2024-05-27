<?php

namespace Tests\Feature;

use Tests\TestCase;
use Livewire\Livewire;
use App\Models\User;
use App\Models\Cita;
use App\Models\Medico;
use App\Models\Paciente;
use App\Enum\EstadoCita;
use App\Enum\Rol;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CalendarioCitasTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_loads_pending_appointments_for_medico()
    {
        $medico = Medico::factory()->create();
        $user = User::factory()->create([
            'rol' => Rol::Medico,
            'id' => $medico->user_id,
        ]);

        $this->actingAs($user);

        $paciente = Paciente::factory()->create();

        Cita::factory()->create([
            'medico_id' => $medico->id,
            'paciente_id' => $paciente->id,
            'estatus' => EstadoCita::PENDIENTE,
            'fecha_hora_cita' => now()->addDay(),
        ]);

        Livewire::test('calendario-citas')
            ->call('mount')
            ->assertDispatched('CitasCargadas', function ($citas) use ($paciente) {
                return $citas[0]['title'] === 'Cita con ' . $paciente->nombre . ' ' . $paciente->apellido_paterno;
            });
    }

    /** @test */
    public function it_loads_pending_appointments_for_non_medico_user()
    {
        $user = User::factory()->create([
            'rol' => Rol::Administrador, // assuming Admin is another role
        ]);

        $this->actingAs($user);

        $paciente = Paciente::factory()->create();

        Cita::factory()->create([
            'paciente_id' => $paciente->id,
            'estatus' => EstadoCita::PENDIENTE,
            'fecha_hora_cita' => now()->addDay(),
        ]);

        Livewire::test('calendario-citas')
            ->call('mount')
            ->assertDispatched('CitasCargadas', function ($citas) use ($paciente) {
                return $citas[0]['title'] === 'Cita con ' . $paciente->nombre . ' ' . $paciente->apellido_paterno;
            });
    }
}
