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
        $this->datos =[];
        Session::put('datos', $this->datos);
        //dd($this->datos);
        return redirect()->to('/pre-factura');
    }
}
