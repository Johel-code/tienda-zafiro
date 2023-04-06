<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Role;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the applicati
     * on's database.
     */
    public function run(): void
    {
        //\App\Models\User::factory(10)->create();
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        \App\Models\Role::factory(10)->create();
        \App\Models\User::factory(10)->create();
        \App\Models\Contract::factory(10)->create();
        \App\Models\Customer::factory(100)->create();
        \App\Models\Invoice::factory(50)->create();
        \App\Models\Category::factory(5)->create();
        \App\Models\Provider::factory(5)->create();
        \App\Models\Product::factory(10)->create();
        \App\Models\Invoice_product::factory()->count(50)->create();

    }
}
