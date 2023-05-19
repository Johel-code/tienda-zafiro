<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678'),
            'role_id' => 1
        ])->assignRole('Admin');

        User::create([
            'name' => 'aprueba',
            'email' => 'aprueba@gmail.com',
            'password' => bcrypt('12345678'),
            'activo_user' => 1,
            'role_id' => 2
        ])->assignRole('Vendedor');
    }
}
