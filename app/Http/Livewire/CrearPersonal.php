<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Contract;
use App\Models\Role;
use App\Models\User;

class CrearPersonal extends Component
{
    public  $roles, $contratos, $id_user, $nombre, $apellido, $direccion, $celular, 
    $ci, $correo, $genero, $fechaNacimiento, $password, /*$estado,$rol,*/
    $id_contract, $fechaInicio, $fechaFin, $salario;
    
    protected $listeners = ['clean-cerrar' => 'limpiar'];

    protected $rules = [
        'nombre' => 'required|regrex:/^([^ ]* ){4}[^ ]*$/',
        'apellido' => 'required',
        'direccion' => 'required',
        'celular' => 'required',
        'ci' => 'required|unique:users,ci',
        'correo' => 'required|email|unique:users,email',/*regex:/^[a-zA-Z0-9\.]+$/|*/
        'password' => 'required|min:8',

        //'genero' => 'required|string',
        //'fechaNacimiento' => 'required|date',
        //'fechaInicio' => 'required|date', 
        //'fechaFin' => 'required|date',
        //'salario' => 'required|numeric',
    ];
    
    protected $messages = [
        'nombre.required' => 'Este campo es obligatorio',
        'apellido.required' => 'Este campo es obligatorio',
        'direccion.required' => 'Este campo es obligatorio',
        'celular.required' => 'Este campo es obligatorio',

        'ci.required' => 'Este campo es obligatorio',
        'ci.unique' => 'Este CI ya existe',

        'correo.required' => 'Este campo es obligatorio',
        'correo.unique' => 'Este correo ya existe',
        'correo.email' => 'Correo electrónico inválido',
        'correo.regex' => 'Formato inválido',

        'password.required' => 'Este campo es obligatorio',
        'password.min' => 'Mínimo 8 caracteres',

        //'genero.required' => 'Este campo es obligatorio',
        //'fechaNacimiento.required' => 'Este campo es obligatorio',
        //'fechaInicio.required' => 'Este campo es obligatorio',
        //'fechaFin.required' => 'Este campo es obligatorio',
        //'salario.required' => 'Este campo es obligatorio',
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
            'genero' => $this->genero ? $this->genero : 'Sin dato',
            'fecha_nacimiento' => $this->fechaNacimiento ? $this->fechaNacimiento : date('Y-m-d'),//'Sin fecha',
            'password' => bcrypt($this->password),
            'activo_user' => 1,

            'role_id'=> Role::where('name_rol', 'Vendedor')->value('id'),
        ]);
        Contract::UpdateOrCreate(['id' => $this->id_contract],[
            'user_id'=> $user->id,
            'fecha_ini' => $this->fechaInicio ? $this->fechaInicio : date('Y-m-d'),//'Sin fecha',
            'fecha_fin' => $this->fechaFin ? $this->fechaFin : date('Y-m-d'), //'Sin fecha',
            'salario' => $this->salario ? $this->salario : 0, //'Sin dato',
        ]);
        session()->flash('message', 'El personal ha sido creado con éxito.');
        $this->limpiar();
    }
    public function limpiar(){
        $this->reset(['nombre', 'apellido', 'direccion', 'celular', 'ci', 'correo', 'genero', 'fechaNacimiento', 'password','fechaInicio', 'fechaFin', 'salario']);
        //session()->flash('message', 'Limpiezaaaaaaaaaaa');
    }
}
