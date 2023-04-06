<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class Products extends Component
{
    public $products;
    public function render()
    {
        $this->products = Product::all();
        return view('livewire.products');
    }
    public function editEstado($id, $estado)
    {
        $inicial = Product::find($id);
        if ($estado) {
            $inicial->estado_product = false;
        } else {
            $inicial->estado_product = true;
        }
        $inicial->save();
    }
}
