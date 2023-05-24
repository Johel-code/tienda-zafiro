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
        'datos.*.cantidad.required' => '',
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
        $this->control();
        return view('livewire.ventas', [
            'products' => $products,
        ]);
    }

    public function mount()
    {
        if (session('datos') === null) {
            $this->datos = [];
        }else{
            $this->datos = session('datos');
        }
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

    public function control()
    {
        $errors = 0;
        foreach ($this->datos as $index => $dato) {
            $valor = $dato['cantidad'];
            $cantidadInventario = $dato['cantidad_inventario'];
            if ($valor === "") {
                $this->datos[$index]['cantidad'] = 1;
            } else if ($valor > $cantidadInventario) {
                $this->addError('datos.' . $index . '.cantidad', 'Se excede al inventario de ' . $cantidadInventario);
                $errors += 1;
            } else {
                $this->datos[$index]['cantidad'] = $valor;
            }
        }

        return $errors;
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

    public function limpiar()
    {
        $this->datos = [];
        $this->search = '';
    }

    public function redirigir()
    {
        $this->validate();
        if ($this->control() === 0) {
            Session::put('datos', $this->datos);
            return redirect()->to('/factura');
        }
    }
}
