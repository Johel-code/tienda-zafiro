<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //\App\Models\Role::factory(2)->create();
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Vendedor']);

        Permission::create(['name' => 'admin.home']);

        Permission::create(['name' => 'admin.products.index']);
        Permission::create(['name' => 'admin.products.edit']);
        Permission::create(['name' => 'admin.products.create']);

        Permission::create(['name' => 'admin.vendedor.index']);
        Permission::create(['name' => 'admin.vendedor.edit']);
        Permission::create(['name' => 'admin.vendedor.create']);

        Permission::create(['name' => 'admin.ventas.index']);
        Permission::create(['name' => 'admin.ventas.edit']);
        Permission::create(['name' => 'admin.ventas.create']);
    }
}
