<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use App\Models\Provider;
use Livewire\Component;

class ModificarProducts extends Component
{

    public $product;

    public $nombre, $descripcion, $cantidad, $precio, $marca,
            $categoria, $fecha, $estado, $foto,$id_product, 
            $proveedor,$cantidad_minima, $adquisicion,$categorias, $proveedors;

    public function mount($id)
    {
        $this->product = Product::find($id);
        $this->nombre = $this->product->name_product;
        $this->descripcion = $this->product->descripcion;
        $this->cantidad = $this->product->cantidad_inventario;
        $this->cantidad_minima = $this->product->cantidad_minima;
        $this->categoria = Category::find($this->product->category_id)->name_categoy;
        $this->marca = $this->product->marca;
        $this->adquisicion = $this->product->costo_adquisicion;
        $this->precio = $this->product->precio;
        $this->proveedors = Provider::all();
        $this->proveedor = $this->product->provider_id;
        $this->fecha = $this->product->fecha_vencimiento;
    }

    public function render()
    {
        
        return view('livewire.modificar-products')
            ->extends('layouts.web')
            ->section('content');
    }
}
