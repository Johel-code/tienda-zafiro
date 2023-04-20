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

    protected $listeners = ['refresh' => 'render'];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $this->category = Category::all();
        $products = Product::when($this->search, function ($query, $search) {
            return $query->whereRaw('LOWER(name_product) LIKE ? ', ['%' . trim(strtolower($search)) . '%']);
        });
        $products = $products->orderBy('estado_product', 'desc')->paginate(10);
        $this->emit('refrescarModal');
        return view('livewire.products', [
            'products' => $products
        ]);
    }
}
