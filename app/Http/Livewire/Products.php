<?php

namespace App\Http\Livewire;

use Livewire\WithPagination;

use App\Models\Product;
use Livewire\Component;

class Products extends Component
{
    use WithPagination;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.products', [
            'products' => Product::paginate(10),
        ]);
    }
}
