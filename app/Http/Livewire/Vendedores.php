<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Vendedores extends Component
{
    use WithPagination;

    public function render()
    {
        $vendedoresActivos = User::where('activo_user', 1)
            ->orderBy('name')->paginate(5);

        return view('livewire.vendedores', [
            'users' => $vendedoresActivos
        ]);
    }
}
