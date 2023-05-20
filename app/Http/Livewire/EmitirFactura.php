<?php

namespace App\Http\Livewire;

use App\Models\Customer;
use App\Models\Invoice;
use App\Models\Invoice_product;
use Livewire\Component;
use Illuminate\Support\Facades\Session;

class EmitirFactura extends Component
{
    public $datos, $suma, $nit, $cliente;

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

        $factura = new Invoice;
        $factura->total_factura = $this->suma;
        $factura->user_id = auth()->user()->id;
        $factura->customer_id = $cliente->id;
        $factura->save();

        foreach($this->datos as $dato){
            $detalle = new Invoice_product;
            $detalle->product_id = $dato['IdProduct'];
            $detalle->invoice_id = $factura->id;
            $detalle->cantidad_detalle = $dato['cantidad'];
            $detalle->precio_unitario = $dato['precio'];
            $detalle->save();
        }

        //$this->generarPDF($factura);
    }

    public function generarPDF($factura)
    {
        $vista = view('factura', [
            'codigoFactura' => $factura->id,
            'ciNit' => $this->nit,
            'nombreCliente' => $this->cliente,
            'productos' => $this->datos,
            'total' => $this->suma,
        ])->render();

        // Crear una nueva instancia de Dompdf
        $dompdf = new Dompdf();

        $dompdf->setPaper('letter');

        // Cargar el contenido HTML en Dompdf
        $dompdf->loadHtml($vista);

        // Renderizar el PDF
        $dompdf->render();

        // Obtener el contenido del PDF como una cadena
        $contenidoPDF = $dompdf->output();

        // Generar una respuesta HTTP con el contenido del PDF
        $response = new \Illuminate\Http\Response($contenidoPDF);

        // Establecer las cabeceras para indicar que es un archivo PDF
        $response->header('Content-Type', 'application/pdf');
        $response->header('Content-Disposition', 'attachment; filename="factura.pdf"');

        // Devolver la respuesta HTTP
        return $response;
    }
}
