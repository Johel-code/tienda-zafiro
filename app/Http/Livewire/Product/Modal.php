<?php

namespace App\Http\Livewire\Product;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithFileUploads;

class Modal extends Component
{
    use WithFileUploads;
    public $product;
    public $category;
    public $isOpen = false;

    protected $listeners = ['mostrarModal'];
    public function render()
    {
        $category = Category::all();
        return view('livewire.product.modal');
    }

    public function mostrarModal($productId)
    {
        $this->product = Product::find($productId);
        $this->isOpen = true;
    }
    
    public function cerrarModal()
    {
        $this->isOpen = false;
    }

}
