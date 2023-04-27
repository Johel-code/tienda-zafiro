<?php

namespace App\Http\Livewire\Product;

use App\Models\Product;
use Livewire\Component;

class ToggleProduct extends Component
{
    public Product $product;
    public bool $isActive;
    public string $field;
    
    public $mostrarModalSwitch = false;
    public function cerrarModalSwitch(){
        $this->updating($this->field,true);
        redirect('/');
        $this->mostrarModalSwitch = false;
    }
    public function confirmarSwitch(){
        $this->mostrarModalSwitch = false;
    }

    public function mount()
    {
        $this->isActive = $this->product->getAttribute('estado_product');
    }

    public function render()
    {
        return view('livewire.product.toggle-product');
    }

    public function updating($field, $value)
    {
        if($this->isActive){
            $this->mostrarModalSwitch = true;
        }
        $this->product->setAttribute($this->field, $value)->save();
        $this->emit('refresh');
    }
}
