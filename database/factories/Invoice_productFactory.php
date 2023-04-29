<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Invoice_product>
 */
class Invoice_productFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product_id'=>$this->faker->randomNumber(1,20),
            'invoice_id'=>$this->faker->randomNumber(1,50),
            'cantidad_detalle'=>$this->faker->randomNumber(1,10000),
            'precio_unitario'=>$this->faker->randomFloat(2,1,10000),
        ];
    }
}
