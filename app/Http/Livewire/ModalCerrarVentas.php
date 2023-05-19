<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ModalCerrarVentas extends Component
{
    public $open = 'hidden';

    protected $listeners =  [
        'clean-cerrar' => 'cerrarModal',
        'show-modalConfirmacion' => 'mostrarModal'
    ];
    
    public function render()
    {
        return view('livewire.modal-cerrar-ventas');
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
        redirect('/');
    }
}
