<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class VendedoresInac extends Component
{
    use WithPagination;
    
    public function render()
    {
        $vededoresInactivos = User::where('activo_user', 0)
        ->orderBy('name')->paginate(5);

        return view('livewire.vendedores-inac', [
            'usersInac' => $vededoresInactivos
        ]);
    }
}
