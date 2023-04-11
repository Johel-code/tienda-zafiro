<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\WithPagination;
use App\Models\Product;
use Illuminate\Mail\Mailables\Content;
use Livewire\Component;
use SebastianBergmann\CodeCoverage\Driver\Selector;

class Products extends Component
{
    use WithPagination;
    public $products;
    public $category;
    public $search = "";


    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {

        $products = Product::when($this->search, function ($query, $search) {
            return $query->whereRaw('LOWER(name_product) LIKE ? ', ['%' . trim(strtolower($search)) . '%']);
        });
        $this->products = Product::all();
        $this->category = Category::all();
        $products = $products->paginate(10);
        return view('livewire.products', [
            'products' => $products
        ]);
    }
}
