<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductsDesac extends Component
{
    use WithPagination;
    public $search = "";
    //public $products;
    public $category;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $this->category = Category::all();
        $productsDesac = Product::where('estado_product', 0)->when($this->search, function ($query, $search) {
            return $query->whereRaw('LOWER(name_product) LIKE ? ', ['%' . trim(strtolower($search)) . '%'])
                ->orwhere('codigo', 'LIKE', '%' . $this->search . '%')->where('estado_product', 0);
        });


        $productsDesac = $productsDesac->orderBy('name_product', 'asc')->paginate(5);
        //$this->emit('refrescarModal');


        return view('livewire.products-desac', [
            'productsDesac' => $productsDesac
        ]);
        //return view('livewire.products-desac');
    }

    public function mostrarModal($productId)
    {
        $this->emit('mostrarModal', $productId);
    }
}
