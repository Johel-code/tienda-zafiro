<?php

namespace App\Http\Livewire\Vendedor;

use App\Models\Contract;
use App\Models\User;
use Livewire\Component;

class ToggleVendedor1 extends Component
{
    public User $user;
    public bool $isActive;
    public string $field;

    public $mostrarModalSwitch = false;
    public function abrirModalSwitch()
    {
        $this->mostrarModalSwitch = true;
    }
    public function cerrarModalSwitch()
    {
        $this->updating($this->field, true);
        $this->emit('resfresh');
        $this->mostrarModalSwitch = false;
        $this->render();
        $this->isActive = true;
        $this->emit('refresh');
        //redirect('/vendedores');
    }
    public function confirmarSwitch()
    {
        $this->updating($this->field, false);
        $this->render();
        //redirect('/vendedores');
    }

    public function mount()
    {
        $this->isActive = $this->user->getAttribute('activo_user');
        $fecha = Contract::whereDate('fecha_fin', '<=', date('d-m-Y', strtotime(now())))->get();
        //dd($fecha);
        foreach ($fecha as $f) {
            $vendedor = User::find($f->id);
            $vendedor->setAttribute('activo_user', false)->save();
        }
        $this->render();
        $this->emit('resfresh');
    }

    public function render()
    {
        return view('livewire.vendedor.toggle-vendedor1');
    }

    public function updating($field, $value)
    {
        if ($this->isActive) {
            $this->abrirModalSwitch();
        } else {
            if (!$value) {
                $temp = $this->user->getAttribute('contraseña');
                $this->user->setAttribute('contraseña', $this->user->getAttribute('password'));
                $this->user->setAttribute('password', $temp);
            }
            $this->user->setAttribute($this->field, $value)->save();
            $this->emit('refresh');
            redirect('/vendedores');
        }
    }
}
