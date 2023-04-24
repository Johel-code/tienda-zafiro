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
            'codigo'=>$this->faker->unique()->numberBetween(10000,99999),
            'name_product'=>$this->faker->randomKey(['Patito 100 gr' => 1,
                                                    'Omo 500 gr' => 2, 
                                                    'Surf 50 gr' => 3,
                                                    'Ace 1 kg' => 4,
                                                    'Jabon' => 5, 
                                                    'Surf 50 gr' => 6,
                                                    'Ola 1 litro' => 7,
                                                    'JabonZote' => 8,
                                                    'Cloro 1lt' => 9, 
                                                    'Esponja' => 10,]),
            'cantidad_inventario'=>$this->faker->numberBetween(0,1000),
            'cantidad_minima'=>$this->faker->numberBetween(0,100),
            'precio'=>$this->faker->randomFloat(2,1,1000),
            'marca'=>$this->faker->randomKey(['Alicorp' => 1,
                                                'Corp' => 2, 
                                                'ClearCorp' => 3,
                                                'Limpieza' => 4,
                                                'ZafiroCorp' => 5,]),
            'fecha_vencimiento'=>$this->faker->dateTimeBetween('now' , '+10 year'),
            'descripcion'=>$this->faker->realText(80),
            'image'=>$this->faker->image(null, 640, 480),
            'estado_product'=>$this->faker->boolean(),
            'costo_adquisicion'=>$this->faker->randomFloat(2,1,1000),

            'category_id'=>$this->faker->numberBetween(1,10),
            'provider_id'=>$this->faker->numberBetween(1,10),
            
        ];
    }
}
