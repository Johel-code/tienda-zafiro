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

    public function render()
    {
        //dd($this->datos);
        return view('livewire.emitir-factura',[
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
        //dd($this->datos);
        $this->datos =[];
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
//        $this->validate();

        $cliente = new Customer;
        $cliente->name_razon = $this->cliente;
        $cliente->ci_nit = $this->nit;
        $cliente->save();

        $this->factura = new Invoice;
        $this->factura->total_factura = $this->suma;
        $this->factura->user_id = auth()->user()->id;
        $this->factura->customer_id = $cliente->id;
        $this->factura->save();

        foreach($this->datos as $dato){
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

        //$this->generarPDF($this->factura, $cliente);
        return redirect()->route('factura.pdf', $this->factura);
    }

    public function generarPDF($factura)
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

        dd($factura);

        $facts = [
            'codigoFactura' => 2,
            'ci' =>1, 
        ];

       // dd($vista);
        $pdf = Pdf::loadView('factura', compact('facts'));
        return $pdf->stream();
    }
}
