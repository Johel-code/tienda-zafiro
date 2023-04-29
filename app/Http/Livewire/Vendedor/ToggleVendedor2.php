<?php

namespace App\Http\Livewire\Vendedor;

use App\Models\User;
use Livewire\Component;

class ToggleVendedor2 extends Component
{
    public User $user;
    public bool $isActive;
    public string $field;
    public $aux = '';

    public function mount()
    {
        $this->isActive = $this->user->getAttribute('activo_user');
    }
    public function render()
    {
        return view('livewire.vendedor.toggle-vendedor2');
    }

    public function updating($field, $value)
    {
        if (!$this->isActive) {
            if ($value) {
                $temp = $this->user->getAttribute('password');
                $this->user->setAttribute('password', $this->user->getAttribute('contraseña'));
                $this->user->setAttribute('contraseña', $temp);
            }
            $this->user->setAttribute($this->field, $value)->save();
            $this->emit('refresh');
            redirect('/vendedores');
        }
    }

}
//comentarioxd