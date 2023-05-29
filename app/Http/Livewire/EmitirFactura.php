<?php

namespace App\Http\Livewire;

use App\Models\Customer;
use App\Models\Invoice;
use App\Models\Invoice_product;
use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Facades\Session;
use Barryvdh\DomPDF\Facade\Pdf;
use DateTime;
use DateTimeZone;


class EmitirFactura extends Component
{
    public $datos, $suma, $nit, $cliente, $importePagado, $importeDevuelto;
    public $factura;

    protected $listeners = ['clean-cerrar' => 'limpiar'];

    protected $rules = [
        'nit' => 'numeric|min:1|max:999999999',

        'cliente' => 'regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚüÜ\s]+$/' ,
        'datos' => 'required|min:1'

    ];

    protected $messages = [
        //'nit.required' => 'Este campo es obligatorio',
        'nit.numeric' => 'Solo admite números enteros',
        'nit.max' => 'Ingrese números menores a 999999999',
        'nit.min' => 'Ingrese números mayores a 0',

        //'cliente.required' => 'Este campo es obligatorio',
        //'cliente.max' => 'Solo se admiten 50 caracteres',
        'cliente.regex' => 'El formato del campo de cliente no es válido.',

        'datos.required' => 'No existen productos para poder emitir factura'
    ];

    public function updated($campo)
    {
        $this->validateOnly($campo);
    }

    public function render()
    {
        //dd($this->datos);
        return view('livewire.emitir-factura', [
            'datos' => $this->datos
        ]);
    }
    public function mount()
    {
        if (session('datos') === null) {
            $this->datos = [];
        } else {

            $this->datos = session('datos');
        }
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
        $this->control();
        if($this->control() < 1){
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
            //$this->generarPDF($factura);

            //$this->generarPDF($this->factura, $cliente);
            // return redirect()->to('factura/'.$this->factura->id);
            $result = $this->factura->id;
            //dd($this->datos);
            session()->put('importePagado', $this->importePagado);
            session()->put('importeDevuelto', $this->importeDevuelto);
            $this->emit('clean-cerrar');
            return redirect()->route('factura.pdf', ['id' => $result]);
        }
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
        $importePagado = session('importePagado');
        $importeDevuelto = session('importeDevuelto');

        $factura = Invoice::find($id);
        $fecha = new DateTime($factura->created_at, new DateTimeZone('UTC'));
        $fecha->setTimezone(new DateTimeZone('America/La_Paz'));
        $fechaFormateada = $fecha->format('d/m/Y H:i:s');
        $facts = [
            'codigoFactura' => $id,
            'ciNit' => $factura->customer->ci_nit,
            'nombreCliente' => $factura->customer->name_razon,
            'productos' => $factura->invoice_products,
            'total' => $factura->total_factura,
            'fecha' => $fechaFormateada,
            'importePagado' => $importePagado,
            'importeDevuelto' => $importeDevuelto,
        ];
        //dd($facts);
        // dd($vista);
        $pdf = Pdf::loadView('factura', compact('facts'));
        //dd($facts);
        //return redirect(request()->header('Referer'));
        session()->forget('importePagado');
        session()->forget('importeDevuelto');
        $this->limpiar();
        return $pdf->download('invoice.pdf');
    }
    public function limpiar()
    {
        $this->datos = [];
        $this->suma = 0;
        $this->nit = "";
        $this->cliente = "";
        $this->importePagado = 0;
        $this->importeDevuelto = 0;
        session()->forget('datos');
        //$this->mount();
        //redirect('/pre-factura');
    }

    public function control()
    {
        $errors = 0;
            if($this->importePagado === ''){
                $this->importePagado = null;
            }
            if($this->importePagado < $this->total()){
                $this->addError('importePagado','El valor debe ser mayor o igual al total');
                $errors++;
            }
            $this->importeDevuelto = round($this->importePagado - $this->total(), 2);
        return $errors;
    }
}
