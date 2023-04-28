<?php

namespace App\Http\Livewire\Vendedor;

use App\Models\User;
use Livewire\Component;

class ToggleVendedor1 extends Component
{
    public User $user;
    public bool $isActive;
    public string $field;

    public function mount()                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  unt()
    {
        $this->isActive = $this->user->getAttribute('activo_user');
        
        $fecha = Contract::whereDAte('fecha_fin', '<', now()) -> get();
        foreach($fecha as $f){
                $vendedor = User::find($f->id);
                $vendedor->setAttribute('activo_user',false)->save();
        }   
    }

    public function render()
    {
        return view('livewire.vendedor.toggle-vendedor1');
    }

    public function updating($field, $value)
    {
        $this->user->setAttribute($this->field, $value)->save();
        $this->emit('refresh');
    }
}
