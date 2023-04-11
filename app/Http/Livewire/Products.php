<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Mail\Mailables\Content;
use Livewire\Component;
use SebastianBergmann\CodeCoverage\Driver\Selector;

class Products extends Component
{
    public $products;
    public $categorias;
    public $idCat;
    public function render()
    {
        $this->products = Product::all();
        $this->categorias = Category::all();
        return view('livewire.products');
    }
}
