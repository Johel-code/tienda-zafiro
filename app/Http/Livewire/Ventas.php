<?php

namespace App\Http\Livewire;

use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Product;
use Illuminate\Support\Facades\Session;

class Ventas extends Component
{
    use WithPagination;
    public $search = "", $error;

    public $datos = [];
    protected $listeners =  ['clean-cerrar' => 'limpiar'];

    protected $rules = [
        'datos' => 'required',
        'datos.*.cantidad' => 'required|numeric|min:1|max:50',
    ];

    protected $messages = [
        'datos.required' => 'Ingrese al menos 1 producto',
        'datos.*.cantidad.min' => 'Minimo: 1 ud.',
        'datos.*.cantidad.max' => 'Máximo: 50 uds.',
    ];

    public function updated($cantidad)
    {
        $this->validateOnly($cantidad);
    }

    public function render()
    {
        $products = Product::where('estado_product', 1)->when($this->search, function ($query, $search) {
            return $query->whereRaw('LOWER(name_product) LIKE ? ', ['%' . trim(strtolower($search)) . '%'])
                ->orwhere('codigo', 'LIKE', '%' . $this->search . '%');
        })->get();

        return view('livewire.ventas', [
            'products' => $products,
        ]);
    }

    public function mount()
    {

        // if (empty($datos)) {
        //     $this->datos = session('datos');
        // }

        //$this->datos = session('datos');

        //dd($datos);
    }

    public function agregar($id, $codigo)
    {
        $existencia = false;

        $index = 0;
        foreach ($this->datos as &$dato) {
            if ($dato['codigo'] === $codigo) {
                $cantidadInventario = $dato['cantidad_inventario'];
                $valor = $dato['cantidad'];

                if ($valor > $cantidadInventario) {
                    $this->addError('datos.' . $index . '.cantidad', 'Se excede al inventario de ' . $cantidadInventario);
                    $this->error++;
                } else {
                    $dato['cantidad'] += 1;
                    $this->error--;
                }
                $existencia = true;
                break;
            }
            $index++;
        }

        if (!$existencia) {
            $product = Product::findOrFail($id);

            $this->datos[] = [
                'codigo' => $codigo,
                'nombre' => $product->name_product,
                'cantidad_inventario' => $product->cantidad_inventario,
                'cantidad_minima' => $product->cantidad_minima,
                //'marca' => $product->marca,
                //'fecha_vencimiento' => $product->fecha,
                'cantidad' => 1,
                'precio' => $product->precio,
                'IdProduct' => $product->id,
            ];
        }
        //$this->search = '';
    }

    public function control($i, $valor)
    {
        $index = $i;
        foreach ($this->datos as &$dato) {
            $cantidadInventario = $dato['cantidad_inventario'];
            $valor = $dato['cantidad'];

            if ($valor > $cantidadInventario) {
                $this->addError('datos.' . $index . '.cantidad', 'Se excede al inventario de ' . $cantidadInventario);
            }
            $index++;
        }
    }

    public function actualizarCantidad($index, $valor)
    {

        $cantidadInventario = $this->datos[$index]['cantidad_inventario'];
        if ($valor > $cantidadInventario) {
            $this->addError('datos.' . $index . '.cantidad', 'Se excede al inventario de ' . $cantidadInventario);
            $this->error++;
        } else {
            $this->datos[$index]['cantidad'] = $valor;
            $this->error--;
        }
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

    public function limpiar()
    {
        $this->datos = [];
        $this->search = '';
    }

    public function redirigir()
    {
        $this->validate();

        if ($this->error > 0) {
            $this->control(0, 0);
        } else {
            Session::put('datos', $this->datos);
            return redirect()->to('/factura');
        }
    }
}
