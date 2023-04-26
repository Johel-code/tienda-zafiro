<?php

namespace App\Http\Livewire\Vendedor;

use Livewire\Component;
use App\Models\User;

class ToggleVendedor2 extends Component
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
        return view('livewire.vendedor.toggle-vendedor2');
    }
    public function updating($field, $value)
    {
        $this->user->setAttribute($this->field, $value)->save();
        $this->emit('refresh');
    }
}
