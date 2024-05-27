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
        $this->artisan('migrate:fresh');
        $this->seed();

        $medico = Medico::first();
        $user = $medico->staff;

        $this->actingAs($user);

        $paciente = Paciente::factory()->create();

        Cita::factory()->create([
            'medico_id' => $medico->id,
            'paciente_id' => $paciente->id,
            'estatus' => EstadoCita::PENDIENTE,
            'fecha_hora_cita' => now()->addDay(),
        ]);

        Livewire::test('calendario-citas')
            ->assertDispatched('CitasCargadas', function ($event, $args) use ($paciente) {
                return $args["citas"][count($args["citas"]) - 1]['title'] === 'Cita con ' . $paciente->nombre . ' ' . $paciente->apellido_paterno;
            });
    }

    /** @test */
    public function it_loads_pending_appointments_for_non_medico_user()
    {
        $this->seed();
        $user = User::where('rol', Rol::Administrador)->first();

        $this->actingAs($user);

        $paciente = Paciente::factory()->create();

        Cita::factory()->create([
            'paciente_id' => $paciente->id,
            'estatus' => EstadoCita::PENDIENTE,
            'fecha_hora_cita' => now()->addDay(),
        ]);

        Livewire::test('calendario-citas')
            ->assertDispatched('CitasCargadas', function ($event, $args) use ($paciente) {
                return $args["citas"][count($args["citas"]) - 1]['title'] === 'Cita con ' . $paciente->nombre . ' ' . $paciente->apellido_paterno;
            });
    }
}
