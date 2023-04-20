<?php

namespace App\Http\Livewire\Product;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithFileUploads;

class Modal extends Component
{
    use WithFileUploads;
    public $product;
    public $category;
    public $ids;
    // public function mount($product)
    // {
    //     dd($this->product);
    //     $this->ids = $product->category_id;
    // }
    public function render()
    {
        $category = Category::all();
        return view('livewire.product.modal');
    }
}
