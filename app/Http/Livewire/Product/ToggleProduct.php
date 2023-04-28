<?php

namespace App\Http\Livewire\Product;

use App\Models\Product;
use Livewire\Component;

class ToggleProduct extends Component
{
    public Product $product;
    public bool $isActive;
    public string $field;

    public function mount()
    {
        $this->isActive = $this->product->getAttribute('estado_product');
    }

    public function render()
    {
        return view('livewire.vendedor.product.toggle-product');
    }


    public function updating($field, $value)
    {
        $this->product->setAttribute($this->field, $value)->save();
        $this->emit('refresh');
    }
}
