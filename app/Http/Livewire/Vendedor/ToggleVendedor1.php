<?php

namespace App\Http\Livewire\Vendedor;

use App\Models\User;
use Livewire\Component;

class ToggleVendedor1 extends Component
{
    public User $user;
    public bool $isActive;
    public string $field;

    public function mount()
    {
        $this->isActive = $this->user->getAttribute('activo_user');
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