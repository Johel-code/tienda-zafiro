<?php

namespace App\Http\Livewire;

use Livewire\WithPagination;

use App\Models\Product;
use Livewire\Component;

class Products extends Component
{
    use WithPagination;
    
    public $searchTerm = "";
    //public $products;


    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $products = Product::when($this->searchTerm, function($query, $searchTerm){
            return $query->whereRaw('LOWER(name_product) LIKE ? ', ['%'.trim(strtolower($searchTerm)).'%']);
        });
        $products = $products->paginate(10);
        return view('livewire.products', [
            'products' => $products
        ]);
    }
}
