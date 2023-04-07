<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
class Products extends Component
{
    public $searchTerm = "";
    public $productos;
    public $products;
    public function render()
    {   
        $this->products = Product::all();
        if(empty($this->searchTerm)){
            $this->productos = Product::where('name_product',$this->searchTerm)->get();

        }else{
            $this->productos= Product::where('name_product','like','%'.$this->searchTerm.'%')->get ();
        }
        return view('livewire.products');
    }
}
