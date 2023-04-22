<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name_categoy'=>$this->faker->unique()->randomElement(['Jabones',
                                                    'Lavavajillas', 
                                                    'Detergentes',
                                                    'Suavizantes',
                                                    'Ambientadores', 
                                                    'Blanqueadores',
                                                    'Desinfectantes', 
                                                    'Limpiadores',
                                                    'Quitamanchas',
                                                    'Pulidores'])
        ];
    }
}
