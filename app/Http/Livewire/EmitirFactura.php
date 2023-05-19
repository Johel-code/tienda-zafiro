<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Session;

class EmitirFactura extends Component
{
    public $datos;
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
        //dd($datos);
    }

    public function redirigir()
    {
        //dd($this->datos);
        Session::put('datos', $this->datos);
        //dd($this->datos);
        return redirect()->to('/pre-factura');
    }

    public function submit()
    {
        $this->validate();
        $factura = new Invoice;
        
        $factura->save();
        generarPDF();
    }

    public function generarPDF()
    {
        $vista = view('factura', [
            'codigoFactura' => $this->codigoFactura,
            'ciNit' => $this->ciNit,
            'nombreCliente' => $this->nombreCliente,
            'productos' => $this->productos,
            'total' => $this->total,
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
