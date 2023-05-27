<?php

namespace App\Http\Livewire;

use App\Models\Customer;
use App\Models\Invoice;
use App\Models\Invoice_product;
use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Facades\Session;
use Barryvdh\DomPDF\Facade\Pdf;


class EmitirFactura extends Component
{
    public $datos, $suma, $nit, $cliente;
    public $factura;

    protected $listeners = ['clean-cerrar' => 'limpiar'];

    protected $rules = [
        'nit' => 'required|numeric|min:1|max:999999999',
        'cliente' => 'required|regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚüÜ\s]+$/' ,
    ];

    protected $messages = [
        'nit.required' => 'Este campo es obligatorio',
        'nit.numeric' => 'Solo admite números enteros',
        'nit.max' => 'Ingrese números mayores a 0',

        'cliente.required' => 'Este campo es obligatorio',
        'cliente.max' => 'Solo se admiten 100 caracteres',
        'nombre.regex' => 'Solo se admiten letras',
    ];

    public function render()
    {
        //dd($this->datos);
        return view('livewire.emitir-factura', [
            'datos' => $this->datos
        ]);
    }
    public function mount()
    {
        $this->datos = session('datos');
        $this->suma = $this->total();
        //        dd($this->datos);

        // dd($this->datos);
    }

    public function redirigir()
    {
        // $this->datos =[];
        Session::put('datos', $this->datos);
        //dd($this->datos);
        return redirect()->to('/pre-factura');
    }

    public function total()
    {
        $suma = 0;

        foreach ($this->datos as $dato) {
            $suma += $dato['cantidad'] * $dato['precio'];
        }

        return $suma;
    }

    public function submit()
    {
        $this->validate();

        $cliente = new Customer;
        $cliente->name_razon = $this->cliente;
        $cliente->ci_nit = $this->nit;
        $cliente->save();

        $this->factura = new Invoice;
        $this->factura->total_factura = $this->suma;
        $this->factura->user_id = auth()->user()->id;
        $this->factura->customer_id = $cliente->id;
        $this->factura->save();

        foreach ($this->datos as $dato) {
            $detalle = new Invoice_product;
            $detalle->product_id = $dato['IdProduct'];
            $detalle->invoice_id = $this->factura->id;
            $detalle->cantidad_detalle = $dato['cantidad'];
            $detalle->precio_unitario = $dato['precio'];
            $detalle->save();

            $producto = Product::find($dato['IdProduct']);
            $producto->cantidad_inventario = $producto->cantidad_inventario - $dato['cantidad'];
            $producto->save();
        }


        $this->limpiar();

        //$this->generarPDF($factura);

        //$this->generarPDF($this->factura, $cliente);
       // return redirect()->to('factura/'.$this->factura->id);
       $result = $this->factura->id;
        return redirect()->route('factura.pdf', ['id' => $result]);

    }

    public function generarPDF($id)
    {
        // $vista = view('factura', [
        //     'codigoFactura' => $factura->id,
        //     'ciNit' => $cliente->ci_nit,
        //     'nombreCliente' => $cliente->name_razon,
        //     'productos' => $this->datos,
        //     'total' => $factura->total_factura,
        // ])->render();

        // $pdf = Pdf::loadHtml($vista);
        // return $pdf->stream();
        $factura = Invoice::find($id);
        $facts = [
            'codigoFactura' => $id,
            'ciNit' => $factura->customer->ci_nit, 
            'nombreCliente' => $factura->customer->name_razon,
            'productos' => $factura->invoice_products,
            'total' => $factura->total_factura,
            'fecha' => $factura->created_at
        ];
        //dd($facts);

       // dd($vista);
        $pdf = Pdf::loadView('factura', compact('facts'));
        return $pdf->download('invoice.pdf');
    }
    public function limpiar()
    {
        $this->datos = [];
    }
}
