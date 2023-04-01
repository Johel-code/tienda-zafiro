<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Provider>
 */
class ProviderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name_provider'=>$this->faker->name,
            'name_empresa'=>$this->faker->word(),
            'celular_provider'=>$this->faker->randomNumber(8,true),
            'direccion_distribuidora'=>$this->faker->sentence(),
            'estado_provider'=>$this->faker->boolean(),
        ];
    }
}
