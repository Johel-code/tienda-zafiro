<?php

namespace App\Http\Livewire;

use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Product;
use Illuminate\Support\Facades\Session;

class Ventas extends Component
{
    use WithPagination;
    public $search = "";

    public $datos = [];

    public function render()
    {
        $products = Product::where('estado_product', 1)->when($this->search, function ($query, $search) {
            return $query->whereRaw('LOWER(name_product) LIKE ? ', ['%' . trim(strtolower($search)) . '%'])
                ->orwhere('codigo', 'LIKE', '%' . $this->search . '%');
        })->orderBy('name_product', 'asc')->get();
    
        return view('livewire.ventas', [
            'products' => $products,
        ]);
    }

    public function agregar($id, $codigo)
    {
        $existencia = false;

        foreach ($this->datos as &$dato) {
            if ($dato['codigo'] === $codigo) {
                $dato['cantidad'] += 1;
                $existencia = true;
                break;
            }
        }

        if (!$existencia) {
            $product = Product::findOrFail($id);
            
            $this->datos[] = [
                'codigo' => $codigo,
                'nombre' => $product->name_product,
                //'cantidad_inventario' => $product->cantidad,
                //'cantidad_minima' => $product->cantidad_minima,
                //'marca' => $product->marca,
                //'fecha_vencimiento' => $product->fecha,
                'cantidad' => 1,
                'precio' => $product->precio,
                'IdProduct' => $product->id,
            ];
        }
    }

    public function actualizarCantidad($index, $valor)
    {
        $this->datos[$index]['cantidad'] = $valor;
    }

    public function quitar($index)
    {
        unset($this->datos[$index]);
    }
    
    public function total()
    {
        $suma = 0;

        foreach ($this->datos as $dato) {
            $suma += $dato['cantidad'] * $dato['precio'];
        }

        return $suma;
    }

    public function redireccionar()
    {
        Session::put('datos', $this->datos);
        
        return redirect()->to('/factura');
    }
    
    
}
