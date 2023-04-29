<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductsDesac extends Component
{
    use WithPagination;
    public function render()
    {
        $category = Category::all();
        $productsDesac = Product::where('estado_product', '=', 'false');

        $productsDesac = $productsDesac->orderBy('name_product', 'asc')->paginate(5);
        $this->emit('refrescarModal');

        return view('livewire.products-desac', [
            'productsDesac' => $productsDesac,
            'category' => $category
        ]);
        //return view('livewire.products-desac');
    }
}
