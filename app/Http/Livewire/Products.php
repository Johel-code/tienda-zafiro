<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\WithPagination;

use App\Models\Product;
use Livewire\Component;

class Products extends Component
{
    use WithPagination;

    public $search = "";
    //public $products;
    public $category;

    //protected $listeners = ['refresh' => 'render'];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $this->category = Category::all();
        $products = Product::where('estado_product', 1)->when($this->search, function ($query, $search) {
            return $query->whereRaw('LOWER(name_product) LIKE ? ', ['%' . trim(strtolower($search)) . '%'])
                ->orwhere('codigo', 'LIKE', '%' . $this->search . '%')->where('estado_product', 1);
        });


        $products = $products->orderBy('name_product', 'asc')->paginate(5);
        //$this->emit('refrescarModal');


        return view('livewire.products', [
            'products' => $products
        ]);
    }

    public function mostrarModal($productId)
    {
        $this->emit('mostrarModal', $productId);
    }
}
