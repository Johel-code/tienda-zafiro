<?php

namespace App\Http\Livewire\Vendedor;

use App\Models\Contract;
use App\Models\User;
use Livewire\Component;

class ToggleVendedor2 extends Component
{
    public User $user;
    public Contract $contrato;
    public $contratoPequeno;
    public bool $isActive;
    public string $field;
    public $aux = '';
    public $mostrarModalSwitch = false;
    public $mostrarModalSwitch2 = false;
    public function abrirModalSwitch()
    {
        $this->mostrarModalSwitch = true;
    }
    public function cerrarModalSwitch()
    {
        $this->updating($this->field, false);
        $this->emit('resfresh');
        $this->mostrarModalSwitch = false;
        $this->mostrarModalSwitch2 = false;
        $this->render();
        $this->isActive = false;
        $this->emit('refresh');
        //redirect('/vendedores');
    }
    public function confirmarSwitch()
    {
        $contrato = Contract::where('user_id', '=', $this->user->id)->get();

        foreach ($contrato as $contratos) {
            $contratoPequeno = $contratos->fecha_fin;
        }
        if (empty($contratoPequeno)) {
            $contratoPequeno = '2001-01-01';
        }

        if (date('Y-m-d', strtotime($contratoPequeno)) >= date('Y-m-d', strtotime(now()))) {
            $this->updating($this->field, true);
        } else {
            $this->isActive = false;
            $this->updating($this->field, false);
            //redirect('/vendedores');
        }
        $this->emit('resfresh');
        $this->mostrarModalSwitch = false;
        $this->render();
    }


    public function mount()
    {
        $this->isActive = $this->user->getAttribute('activo_user');
        $this->render();
    }
    public function render()
    {
        return view('livewire.vendedor.toggle-vendedor2');
    }

    public function updating($field, $value)
    {
        //$this->emit('refresh');
        if (!$this->isActive) {
            //me ayudara a elegir que modal abrir
            $contrato = Contract::where('user_id', '=', $this->user->id)->get();
            foreach ($contrato as $contratos) {
                $contratoPequeno = $contratos->fecha_fin;
            }
            if (empty($contratoPequeno)) {
                $contratoPequeno = '2001-01-01';
            }
            if (date('Y-m-d', strtotime($contratoPequeno)) >= date('Y-m-d', strtotime(now()))) {
                $this->abrirModalSwitch();
            } else {
                $this->mostrarModalSwitch2 = true;
            }
        } else {

            if ($value) {
                $temp = $this->user->getAttribute('password');
                $this->user->setAttribute('password', $this->user->getAttribute('contraseña'));
                $this->user->setAttribute('contraseña', $temp);
            }
            $this->user->setAttribute($this->field, $value)->save();
            $this->emit('refresh');
        }
        $this->render();
    }
}
//comentarioxd