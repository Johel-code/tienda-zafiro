<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Support\Facades\DB;
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
        DB::table('roles')->insert([
            'name_rol'=> 'Administrador',
        ]);
        DB::table('roles')->insert([
            'name_rol'=> 'Vendedor',
        ]);
        
        DB::table('users')->insert([//1
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
        //\App\Models\User::factory(10)->create();
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        DB::table('users')->insert([//2
            'name' => 'Juan',
            'last_name' => 'Perez Ignacio',
            'direccion' => 'Av. Blanco Galindo nro 18',
            'celular' => '78985989',
            'ci' => '184856LP',
            'email' => 'juan@gmail.com',
            'genero' => 'Masculino',
            'fecha_nacimiento' => '1998/03/30',
            'password' => bcrypt(12345678),
            'contraseña'=> bcrypt('abcdefgh'),
            'activo_user' => 1,
            'role_id'=> 2,
        ]);

        DB::table('users')->insert([//3
            'name' => 'Pedro',
            'last_name' => 'Garcia Ignacio',
            'direccion' => 'Av. Villazon nro 107',
            'celular' => '98785989',
            'ci' => '974856LP',
            'email' => 'pedro@gmail.com',
            'genero' => 'Masculino',
            'fecha_nacimiento' => '1995/08/31',
            'password' => bcrypt(12345678),
            'contraseña'=> bcrypt('abcdefgh'),
            'activo_user' => 1,
            'role_id'=> 2,
        ]);

        DB::table('users')->insert([//4
            'name' => 'Santiago',
            'last_name' => 'Rojas Ignacio',
            'direccion' => 'Av. Circunvalación nro 197',
            'celular' => '68785989',
            'ci' => '18485698',
            'email' => 'santi@gmail.com',
            'genero' => 'Masculino',
            'fecha_nacimiento' => '1999/10/31',
            'password' => bcrypt(12345678),
            'contraseña'=> bcrypt('abcdefgh'),
            'activo_user' => 1,
            'role_id'=> 2,
        ]);

        DB::table('users')->insert([//5
            'name' => 'Judas',
            'last_name' => 'Ramirez Poveda',
            'direccion' => 'Av. Aroma nro 178',
            'celular' => '78985997',
            'ci' => '184856SC',
            'email' => 'judas@gmail.com',
            'genero' => 'Masculino',
            'fecha_nacimiento' => '1988/10/31',
            'password' => bcrypt(12345678),
            'contraseña'=> bcrypt('abcdefgh'),
            'activo_user' => 1,
            'role_id'=> 2,
        ]);

        DB::table('users')->insert([//6
            'name' => 'Rosa',
            'last_name' => 'Mamani Ignacio',
            'direccion' => 'Av. Heroinas nro 1788',
            'celular' => '69585989',
            'ci' => '18485621',
            'email' => 'rosa@gmail.com',
            'genero' => 'Femenino',
            'fecha_nacimiento' => '2000/09/25',
            'password' => bcrypt(12345678),
            'contraseña'=> bcrypt('abcdefgh'),
            'activo_user' => 1,
            'role_id'=> 2,
        ]);

        DB::table('users')->insert([//7
            'name' => 'Fernanda',
            'last_name' => 'Ferrufino Fernandez',
            'direccion' => 'Av. Blanco Galindo nro 1988',
            'celular' => '78987489',
            'ci' => '18483652',
            'email' => 'fer@gmail.com',
            'genero' => 'Femenino',
            'fecha_nacimiento' => '2001/10/31',
            'password' => bcrypt(12345678),
            'contraseña'=> bcrypt('abcdefgh'),
            'activo_user' => 1,
            'role_id'=> 2,
        ]);
        //inactivos
        DB::table('users')->insert([//8
            'name' => 'Joaquin',
            'last_name' => 'Rosas Arze',
            'direccion' => 'Av. Blanco Galindo nro 718',
            'celular' => '79857889',
            'ci' => '98685744',
            'email' => 'joaquin@gmail.com',
            'genero' => 'Masculino',
            'fecha_nacimiento' => '1998/12/30',
            'password' => bcrypt(12345678),
            'contraseña'=> bcrypt('abcdefgh'),
            'activo_user' => 0,
            'role_id'=> 2,
        ]);

        DB::table('users')->insert([//9
            'name' => 'Emilia Rosa',
            'last_name' => 'Garcia Ignacio',
            'direccion' => 'Av. Villazon nro 1707',
            'celular' => '68985989',
            'ci' => '974856CB',
            'email' => 'emio@gmail.com',
            'genero' => 'Femenino',
            'fecha_nacimiento' => '2002/08/01',
            'password' => bcrypt(12345678),
            'contraseña'=> bcrypt('abcdefgh'),
            'activo_user' => 0,
            'role_id'=> 2,
        ]);

        DB::table('users')->insert([//10
            'name' => 'Amelia',
            'last_name' => 'Rojas Sanchez',
            'direccion' => 'Av. Circunvalación nro 1797',
            'celular' => '68785789',
            'ci' => '56885698',
            'email' => 'ame@gmail.com',
            'genero' => 'Femenino',
            'fecha_nacimiento' => '2004/10/31',
            'password' => bcrypt(12345678),
            'contraseña'=> bcrypt('abcdefgh'),
            'activo_user' => 0,
            'role_id'=> 2,
        ]);

        DB::table('users')->insert([//11
            'name' => 'Julieta',
            'last_name' => 'Ramirez Rojas',
            'direccion' => 'Av. Aroma nro 1778',
            'celular' => '89785997',
            'ci' => '18985547',
            'email' => 'julieta@gmail.com',
            'genero' => 'Femenino',
            'fecha_nacimiento' => '2003/10/04',
            'password' => bcrypt(12345678),
            'contraseña'=> bcrypt('abcdefgh'),
            'activo_user' => 0,
            'role_id'=> 2,
        ]);

        DB::table('users')->insert([//12
            'name' => 'Rosa Jazmin',
            'last_name' => 'Mamani Ignacio',
            'direccion' => 'Av. Heroinas nro 1788',
            'celular' => '68797989',
            'ci' => '69785621',
            'email' => 'jazmin@gmail.com',
            'genero' => 'Femenino',
            'fecha_nacimiento' => '2002/09/21',
            'password' => bcrypt(12345678),
            'contraseña'=> bcrypt('abcdefgh'),
            'activo_user' => 0,
            'role_id'=> 2,
        ]);

        DB::table('users')->insert([//13
            'name' => 'Ana Maria',
            'last_name' => 'Montaño Fernandez',
            'direccion' => 'Av. Oquendo nro 17988',
            'celular' => '73657489',
            'ci' => '78983652',
            'email' => 'ana@gmail.com',
            'genero' => 'Femenino',
            'fecha_nacimiento' => '2003/10/15',
            'password' => bcrypt(12345678),
            'contraseña'=> bcrypt('abcdefgh'),
            'activo_user' => 0,
            'role_id'=> 2,
        ]);
        //\App\Models\Role::factory(2)->create();
        //\App\Models\User::factory(20)->create();
        //\App\Models\Contract::factory(10)->create();
        \App\Models\Customer::factory(100)->create();
        \App\Models\Invoice::factory(50)->create();
        \App\Models\Category::factory(10)->create();
        \App\Models\Provider::factory(10)->create();
        \App\Models\Product::factory(20)->create();
        \App\Models\Invoice_product::factory()->count(50)->create();

    }
}
