<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contract>
 */
class ContractFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id'=>$this->faker->unique()->numberBetween(1,14),
            'fecha_ini'=>$this->faker->dateTimeBetween('-1 month', 'now'),
            'fecha_fin'=>$this->faker->dateTimeBetween('now' , '+1 year'),
            'salario'=>$this->faker->numberBetween(1000,5000),
        ];
    }
}
