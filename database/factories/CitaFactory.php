<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cita>
 */
class CitaFactory extends Factory
{

    protected $model = \App\Models\Cita::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'paciente_id' => $this->faker->numberBetween(1, 10),
            'medico_id' => 1,
            'institucion_medica_id' => 1,
            'departamento_id' => 1,
            'fecha_hora_cita' => Carbon::now()->addDays($this->faker->numberBetween(1, 10)),
            'tipo_id' => $this->faker->numberBetween(1, 20),
            'estatus' => $this->faker->randomElement(['Pendiente']),
            'motivo' => $this->faker->sentence(10),
        ];
    }
}
