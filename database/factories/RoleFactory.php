<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Role>
 */
class RoleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name_rol'=>$this->faker->randomKey(['Vendedor' => 1,
                                                'Administrador' => 2, 
                                                'Vendedor' => 3,
                                                'Vendedor' => 4]),
        ];
    }
}
