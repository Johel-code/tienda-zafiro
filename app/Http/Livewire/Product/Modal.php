<?php

namespace App\Http\Livewire\Product;

use App\Models\Category;
use Livewire\Component;
use App\Models\Product;
use Livewire\Livewire;

class Modal extends Component
{
    //public Category $categorias;
    public Product $product;

    public function render()
    {
        //$this->categorias = Category::all();
        return view('livewire.product.modal');
    }


    public function mostrar($id)
    {
        //$categorias = Category::where('id', '=', $this->id)->get();
        return view('livewire.product.modal');
    }
}
