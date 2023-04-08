<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Invoice>
 */
class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'total_factura'=>$this->faker->randomFloat(2,1,10000),
            'user_id'=>$this->faker->randomNumber(1,10),
            'customer_id'=>$this->faker->randomNumber(1,100),
        ];
    }
}
