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

    protected $listeners = ['refrescarModal' => 'render'];
    public function render()
    {
        $category = Category::all();
        return view('livewire.vendedor.product.modal');
    }
}
