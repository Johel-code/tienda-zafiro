<?php

namespace App\Http\Livewire\Product;

use App\Models\Product;
use Livewire\Component;

class ToggleProduct2 extends Component
{
    public Product $product;
    public bool $isActive;
    public string $field;

    public $mostrarModalSwitch = false;
    public $mostrarModalSwitch2 = false;
    public function abrirModalSwitch()
    {
        $this->mostrarModalSwitch = true;
    }
    public function cerrarModalSwitch()
    {
        $this->mostrarModalSwitch = false;
        $this->mostrarModalSwitch2 = false;
        $this->isActive = false;
        //$this->updating($this->field, false);
        //redirect('/');
    }
    public function confirmarSwitch()
    {
        $this->updating($this->field, true);
        redirect('/');
    }

    public function mount()
    {
        $this->isActive = $this->product->getAttribute('estado_product');
    }

    public function render()
    {
        return view('livewire.product.toggle-product2');
    }

    public function updating($field, $value)
    {
        if ($this->isActive) {
            $this->product->setAttribute($this->field, $value)->save();
            //$this->emit('refresh');
        }else{
            $temp = $this->product->getAttribute('fecha_vencimiento');
            if (date('Y-m-d', strtotime($temp)) >= date('Y-m-d', strtotime(now())) || empty($temp)) {
                $this->abrirModalSwitch();
            } else {
                $this->mostrarModalSwitch2 = true;
            }   
        }
    }
}
