<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Contract;
use App\Models\Role;
use App\Models\User;

class CrearPersonal extends Component
{
    public  $roles, $contratos, $id_user, $nombre, $apellido, $direccion, $celular, 
    $ci, $correo, $genero, $fechaNacimiento, $password,
    $id_contract, $fechaInicio, $fechaFin, $salario, $limite;

    protected $listeners = ['clean-cerrar' => 'limpiar'];

    protected $rules = [
        'nombre' => 'required|regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚüÜ\s]+$/',
        'apellido' => 'required|regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚüÜ\s]+$/',
        'direccion' => 'required|regex:/^[0-9a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#.\s]+$/|min:10',
        'celular' => 'required|regex:/^[0-9]+$/|min:8',
        'ci' => 'required|regex:/^[0-9]{6}[a-zA-Z0-9]{0,2}$/|min:6|unique:users,ci',
        'correo' => 'required|email|regex:/^[a-zA-Z0-9.@_\-\/]+$/|unique:users,email',
        'password' => 'required|min:8',
        'salario' => 'required|min:4|max:9999999999.99|nullable',
        'genero' => 'nullable',//required
        'fechaNacimiento' => 'required|date|before:18 years ago|nullable',
        'fechaInicio' => 'required|date|nullable', 
        'fechaFin' => 'required|date|after_or_equal:fechaInicio|nullable',
    ];

    protected $messages = [
        'nombre.required' => 'Este campo es obligatorio',
        'nombre.regex' => 'Solo se admiten letras',

        'apellido.required' => 'Este campo es obligatorio',
        'apellido.regex' => 'Solo se admiten letras',

        'direccion.required' => 'Este campo es obligatorio',
        'direccion.regex' => 'Solo se admiten letras y números',
        'direccion.min' => 'Minimo 10 caracteres',

        'celular.required' => 'Este campo es obligatorio',
        'celular.regex' => 'Solo se admiten números',
        'celular.min'=> 'Minimo 8 digitos',

        'ci.required' => 'Este campo es obligatorio',
        'ci.unique' => 'Este CI ya existe',
        'ci.regex' => 'Obligatorio 6 números seguidos, opcional 2 alfanuméricos',
        'ci.min' => 'Minimo 6 digitos',

        'correo.required' => 'Este campo es obligatorio',
        'correo.unique' => 'Este correo ya existe',
        'correo.email' => 'Correo electrónico inválido',
        'correo.regex' => 'Solo se admite @, letras, números, puntos',

        'password.required' => 'Este campo es obligatorio',
        'password.min' => 'Mínimo 8 caracteres',

        'salario.regex' => 'Solo se admiten números',
        'salario.required' => 'Este campo es obligatorio',
        'salario.min' => 'Minimo 1000 bs',

        'fechaNacimiento.before' => 'Ingrese una fecha anterior a 18 años',
        'fechaNacimiento.required' => 'Este campo es obligatorio',
        
        'fechaFin.required' => 'Este campo es obligatorio',
        'fechaFin.after_or_equal' => 'Ingrese una fecha posterior o igual a la fecha de inicio',
        
        'fechaInicio.required' => 'Este campo es obligatorio',

        //'genero.required' => 'Este campo es obligatorio',
    ];
    
    public function render()
    {
        return view('livewire.crear-personal');
    }

    /*public function mount()
    {
        $this->roles = Role::all();
        $this->contratos = Contract::all();
    }*/
    public function updated($campo)
    {
        $this->validateOnly($campo);
    }
    public function submit()
    {
        $this->validate();
        $user=User::UpdateOrCreate(['id' => $this->id_user],[
            'name' => $this->nombre,
            'last_name' => $this->apellido,
            'direccion' => $this->direccion,
            'celular' => $this->celular,
            'ci' => $this->ci,
            'email' => $this->correo,
            'genero' => $this->genero,
            'fecha_nacimiento' => $this->fechaNacimiento,
            'password' => bcrypt($this->password),
            'contraseña'=> bcrypt('abcdefgh'),//contraseña por defecto
            'activo_user' => 1,

            'role_id'=> Role::where('name_rol', 'Vendedor')->value('id'),
        ]);
        Contract::UpdateOrCreate(['id' => $this->id_contract],[
            'user_id'=> $user->id,
            'fecha_ini' => $this->fechaInicio,
            'fecha_fin' => $this->fechaFin, 
            'salario' => $this->salario,
        ]);
        session()->flash('message', 'El personal ha sido creado con éxito.');
        $this->limpiar();
    }
    public function limpiar(){
        $this->reset(['nombre', 'apellido', 'direccion', 'celular', 'ci', 'correo', 'genero', 'fechaNacimiento', 'password','fechaInicio', 'fechaFin', 'salario']);
        //session()->flash('message', 'Limpiezaaaaaaaaaaa');
    }
}
