<?php

namespace App\Http\Livewire;

use Livewire\WithPagination;

use App\Models\Product;
use Livewire\Component;

class Products extends Component
{
    use WithPagination;
    
    public $search = "";
    //public $products;


    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $products = Product::when($this->search, function($query, $search){
            return $query->whereRaw('LOWER(name_product) LIKE ? ', ['%'.trim(strtolower($search)).'%']);
        });
        $products = $products->paginate(10);
        return view('livewire.products', [
            'products' => $products
        ]);
    }
}
