<?php

namespace App\Http\Livewire\Product;

use App\Models\Product;
use App\Models\User;
use Livewire\Component;

class ToggleProduct extends Component
{
    public Product $product;
    public bool $isActive;
    public string $field;
    
    public $mostrarModalSwitch = false;
    public function abrirModalSwitch(){
        $this->mostrarModalSwitch = true;
    }
    public function cerrarModalSwitch(){
        $this->updating($this->field,true);
        redirect('/');
    }
    public function confirmarSwitch(){
        $this->updating($this->field,false);
        redirect('/');
    }

    public function mount()
    {
        $this->isActive = $this->product->getAttribute('estado_product');
        $fechaProm = Product::whereDate('fecha_vencimiento', '<', now())->get();
        foreach ($fechaProm as $product1) {
            $product1->setAttribute('estado_product', false)->save();
        }
    }

    public function render()
    {
        return view('livewire.product.toggle-product');
    }

    public function updating($field, $value)
    {
        if($this->isActive){
            $this->abrirModalSwitch();
        }else{
            $this->product->setAttribute($this->field, $value)->save();
            $this->emit('refresh');
        }
    }
    public function darDeBaja($id)
    {
        $vendedor = User::find($id);
        $vendedor->setAttribute('activo_user', false)->save();
    }
}
