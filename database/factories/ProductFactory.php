<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name_product'=>$this->faker->randomKey(['Patito 100 gr' => 1,
                                                    'Omo 500 gr' => 2, 
                                                    'Surf 50 gr' => 3,
                                                    'Ola 1 litro' => 4,
                                                    'Omo 500 gr' => 5, 
                                                    'Surf 50 gr' => 6,
                                                    'Ola 1 litro' => 7,
                                                    'Ola 500 ml' => 8,
                                                    'trister 250 gr' => 9, 
                                                    'Surf 500 gr' => 10,]),
            'cantidad_inventario'=>$this->faker->numberBetween(0,100),
            'cantidad_minima'=>$this->faker->numberBetween(0,10),
            'precio'=>$this->faker->randomFloat(2,1,100),
            'marca'=>$this->faker->randomKey(['Patito' => 1,
                                                'Omo' => 2, 
                                                'Surf' => 3,
                                                'Bristar' => 4,]),
            'fecha_vencimiento'=>$this->faker->date(),
            'descripcion'=>$this->faker->text(),
            'image'=>$this->faker->image(null, 640, 480),
            'estado_product'=>$this->faker->boolean(),
            'costo_adquisicion'=>$this->faker->randomFloat(2,1,100),

            'category_id'=>$this->faker->numberBetween(1,5),
            'provider_id'=>$this->faker->numberBetween(1,5),
            
        ];
    }
}
