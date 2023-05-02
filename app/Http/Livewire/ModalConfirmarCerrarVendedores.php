<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ModalConfirmarCerrarVendedores extends Component
{
    public $open = 'hidden';

    protected $listeners =  [
        'show-modalConfirmacionVendedor' => 'mostrarModal'
    ];

    public function render()
    {
        return view('livewire.modal-confirmar-cerrar-vendedores');
    }
    public function mostrarModal()
    {
        $this->open = '';
    }
    public function cerrarModal()
    {
        $this->open = 'hidden';
    }
    public function redirigir()
    {
        redirect('/vendedores');
    }
}
