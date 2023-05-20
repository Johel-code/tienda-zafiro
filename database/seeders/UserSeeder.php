<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


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
            'role_id' => 2
        ])->assignRole('Vendedor');

        User::create([ //2
            'name' => 'Juan',
            'last_name' => 'Perez Ignacio',
            'direccion' => 'Av. Blanco Galindo nro 18',
            'celular' => '78985989',
            'ci' => '184856LP',
            'email' => 'juan@gmail.com',
            'genero' => 'Masculino',
            'fecha_nacimiento' => '1998/03/30',
            'password' => bcrypt(12345678),
            'contraseña' => bcrypt('abcdefgh'),
            'activo_user' => 1,
            //'role_id'=> 2,
        ])->assignRole('Vendedor');

        User::create([ //3
            'name' => 'Pedro',
            'last_name' => 'Garcia Ignacio',
            'direccion' => 'Av. Villazon nro 107',
            'celular' => '98785989',
            'ci' => '974856LP',
            'email' => 'pedro@gmail.com',
            'genero' => 'Masculino',
            'fecha_nacimiento' => '1995/08/31',
            'password' => bcrypt(12345678),
            'contraseña' => bcrypt('abcdefgh'),
            'activo_user' => 1,
            //'role_id'=> 2,
        ])->assignRole('Vendedor');

        User::create([ //4
            'name' => 'Santiago',
            'last_name' => 'Rojas Ignacio',
            'direccion' => 'Av. Circunvalación nro 197',
            'celular' => '68785989',
            'ci' => '18485698',
            'email' => 'santi@gmail.com',
            'genero' => 'Masculino',
            'fecha_nacimiento' => '1999/10/31',
            'password' => bcrypt(12345678),
            'contraseña' => bcrypt('abcdefgh'),
            'activo_user' => 1,
            //'role_id'=> 2,
        ])->assignRole('Vendedor');

        User::create([ //5
            'name' => 'Judas',
            'last_name' => 'Ramirez Poveda',
            'direccion' => 'Av. Aroma nro 178',
            'celular' => '78985997',
            'ci' => '184856SC',
            'email' => 'judas@gmail.com',
            'genero' => 'Masculino',
            'fecha_nacimiento' => '1988/10/31',
            'password' => bcrypt(12345678),
            'contraseña' => bcrypt('abcdefgh'),
            'activo_user' => 1,
            //'role_id'=> 2,
        ])->assignRole('Vendedor');

        User::create([ //6
            'name' => 'Rosa',
            'last_name' => 'Mamani Ignacio',
            'direccion' => 'Av. Heroinas nro 1788',
            'celular' => '69585989',
            'ci' => '18485621',
            'email' => 'rosa@gmail.com',
            'genero' => 'Femenino',
            'fecha_nacimiento' => '2000/09/25',
            'password' => bcrypt(12345678),
            'contraseña' => bcrypt('abcdefgh'),
            'activo_user' => 1,
            //'role_id'=> 2,
        ])->assignRole('Vendedor');

        User::create([ //7
            'name' => 'Fernanda',
            'last_name' => 'Ferrufino Fernandez',
            'direccion' => 'Av. Blanco Galindo nro 1988',
            'celular' => '78987489',
            'ci' => '18483652',
            'email' => 'fer@gmail.com',
            'genero' => 'Femenino',
            'fecha_nacimiento' => '2001/10/31',
            'password' => bcrypt(12345678),
            'contraseña' => bcrypt('abcdefgh'),
            'activo_user' => 1,
            //'role_id'=> 2,
        ])->assignRole('Vendedor');

        User::create([ //8
            'name' => 'Joaquin',
            'last_name' => 'Rosas Arze',
            'direccion' => 'Av. Blanco Galindo nro 718',
            'celular' => '79857889',
            'ci' => '98685744',
            'email' => 'joaquin@gmail.com',
            'genero' => 'Masculino',
            'fecha_nacimiento' => '1998/12/30',
            'password' => bcrypt(12345678),
            'contraseña' => bcrypt('abcdefgh'),
            'activo_user' => 1,
            //'role_id'=> 2,
        ])->assignRole('Vendedor');

        User::create([ //9
            'name' => 'Emilia Rosa',
            'last_name' => 'Garcia Ignacio',
            'direccion' => 'Av. Villazon nro 1707',
            'celular' => '68985989',
            'ci' => '974856CB',
            'email' => 'emio@gmail.com',
            'genero' => 'Femenino',
            'fecha_nacimiento' => '2002/08/01',
            'password' => bcrypt(12345678),
            'contraseña' => bcrypt('abcdefgh'),
            'activo_user' => 1,
            //'role_id'=> 2,
        ])->assignRole('Vendedor');

        User::create([ //10
            'name' => 'Amelia',
            'last_name' => 'Rojas Sanchez',
            'direccion' => 'Av. Circunvalación nro 1797',
            'celular' => '68785789',
            'ci' => '56885698',
            'email' => 'ame@gmail.com',
            'genero' => 'Femenino',
            'fecha_nacimiento' => '2004/10/31',
            'password' => bcrypt(12345678),
            'contraseña' => bcrypt('abcdefgh'),
            'activo_user' => 1,
            //'role_id'=> 2,
        ])->assignRole('Vendedor');

        User::create([ //11
            'name' => 'Julieta',
            'last_name' => 'Ramirez Rojas',
            'direccion' => 'Av. Aroma nro 1778',
            'celular' => '89785997',
            'ci' => '18985547',
            'email' => 'julieta@gmail.com',
            'genero' => 'Femenino',
            'fecha_nacimiento' => '2003/10/04',
            'password' => bcrypt(12345678),
            'contraseña' => bcrypt('abcdefgh'),
            'activo_user' => 1,
            //'role_id'=> 2,
        ])->assignRole('Vendedor');

        User::create([ //12
            'name' => 'Rosa Jazmin',
            'last_name' => 'Mamani Ignacio',
            'direccion' => 'Av. Heroinas nro 1788',
            'celular' => '68797989',
            'ci' => '69785621',
            'email' => 'jazmin@gmail.com',
            'genero' => 'Femenino',
            'fecha_nacimiento' => '2002/09/21',
            'password' => bcrypt(12345678),
            'contraseña' => bcrypt('abcdefgh'),
            'activo_user' => 1,
            //'role_id'=> 2,
        ])->assignRole('Vendedor');

        User::create([ //13
            'name' => 'Ana Maria',
            'last_name' => 'Montaño Fernandez',
            'direccion' => 'Av. Oquendo nro 17988',
            'celular' => '73657489',
            'ci' => '78983652',
            'email' => 'ana@gmail.com',
            'genero' => 'Femenino',
            'fecha_nacimiento' => '2003/10/15',
            'password' => bcrypt(12345678),
            'contraseña' => bcrypt('abcdefgh'),
            'activo_user' => 1,
            //'role_id'=> 2,
        ])->assignRole('Vendedor');

        DB::table('contracts')->insert([//1
            'user_id'=> '1',
            'fecha_ini' => '2023/01/01',
            'fecha_fin' => '2030/12/31', 
            'salario' => '5000',
        ]);
        DB::table('contracts')->insert([//2
            'user_id'=> '2',
            'fecha_ini' => '2023/02/01',
            'fecha_fin' => '2027/12/31', 
            'salario' => '3000',
        ]);
        DB::table('contracts')->insert([//3
            'user_id'=> '3',
            'fecha_ini' => '2023/01/15',
            'fecha_fin' => '2028/12/31', 
            'salario' => '2500',
        ]);
        DB::table('contracts')->insert([//4
            'user_id'=> '4',
            'fecha_ini' => '2023/02/01',
            'fecha_fin' => '2030/12/31', 
            'salario' => '3000',
        ]);
        DB::table('contracts')->insert([//5
            'user_id'=> '5',
            'fecha_ini' => '2023/01/01',
            'fecha_fin' => '2030/12/31', 
            'salario' => '4000',
        ]);
        DB::table('contracts')->insert([//6
            'user_id'=> '6',
            'fecha_ini' => '2023/01/01',
            'fecha_fin' => '2030/12/31', 
            'salario' => '3000',
        ]);
        DB::table('contracts')->insert([//7
            'user_id'=> '7',
            'fecha_ini' => '2023/01/01',
            'fecha_fin' => '2030/12/31', 
            'salario' => '3000',
        ]);
        DB::table('contracts')->insert([//8
            'user_id'=> '8',
            'fecha_ini' => '2023/01/01',
            'fecha_fin' => '2030/12/31', 
            'salario' => '1000',
        ]);
        DB::table('contracts')->insert([//9
            'user_id'=> '9',
            'fecha_ini' => '2023/01/01',
            'fecha_fin' => '2030/12/31', 
            'salario' => '2000',
        ]);

        DB::table('contracts')->insert([//10
            'user_id'=> '10',
            'fecha_ini' => '2023/01/01',
            'fecha_fin' => '2030/12/31', 
            'salario' => '1000',
        ]);DB::table('contracts')->insert([//11
            'user_id'=> '11',
            'fecha_ini' => '2023/01/01',
            'fecha_fin' => '2030/12/31', 
            'salario' => '1000',
        ]);
        DB::table('contracts')->insert([//12
            'user_id'=> '12',
            'fecha_ini' => '2023/01/01',
            'fecha_fin' => '2030/12/31', 
            'salario' => '5000',
        ]);
        DB::table('contracts')->insert([//13
            'user_id'=> '13',
            'fecha_ini' => '2023/01/01',
            'fecha_fin' => '2030/12/31', 
            'salario' => '3000',
        ]);
        DB::table('contracts')->insert([//13
            'user_id'=> '14',
            'fecha_ini' => '2023/01/01',
            'fecha_fin' => '2030/12/31', 
            'salario' => '3000',
        ]);

    }
}
