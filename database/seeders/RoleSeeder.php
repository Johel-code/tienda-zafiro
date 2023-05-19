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

        Permission::create(['name' => 'Admin.vista'])->assignRole($role1);
        Permission::create(['name' => 'Vendedor.vista'])->syncRoles([$role1, $role2]);

        // Permission::create(['name' => 'admin.products.index'])->syncRoles([$role1]);
        // Permission::create(['name' => 'admin.products.edit'])->syncRoles([$role1]);
        // Permission::create(['name' => 'admin.products.create'])->syncRoles([$role1]);

        // Permission::create(['name' => 'admin.vendedor.index'])->syncRoles([$role1, $role2]);
        // Permission::create(['name' => 'admin.vendedor.edit'])->syncRoles([$role1, $role2]);
        // Permission::create(['name' => 'admin.vendedor.create'])->syncRoles([$role1, $role2]);

        // Permission::create(['name' => 'admin.ventas.index'])->syncRoles([$role1, $role2]);
        // Permission::create(['name' => 'admin.ventas.edit'])->syncRoles([$role1, $role2]);
        // Permission::create(['name' => 'admin.ventas.create'])->syncRoles([$role1, $role2]);
    }
}
