<?php

namespace App\Http\Livewire\Product;

use Livewire\Component;
use App\Models\Product;

class Modal extends Component
{
    public Product $product;
    public function render()
    {

        return view('livewire.product.modal');
    }
}
