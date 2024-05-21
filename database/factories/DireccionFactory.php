<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Direccion>
 */
class DireccionFactory extends Factory
{

    protected $model = \App\Models\Direccion::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'calle' => $this->faker->streetName,
            'numero_exterior' => $this->faker->buildingNumber,
            'numero_interior' => $this->faker->buildingNumber,
            'colonia' => $this->faker->city,
            'codigo_postal' => $this->faker->regexify('\d{5}'),
            'ciudad' => $this->faker->city,
            'estado' => $this->faker->state,
            'telefono' => $this->faker->regexify('\(\d{3}\) \d{3}-\d{4}'),
            'email' => $this->faker->unique()->safeEmail,
        ];
    }
}
