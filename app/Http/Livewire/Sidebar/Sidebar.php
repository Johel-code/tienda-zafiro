<?php

namespace App\Http\Livewire\Sidebar;

use Livewire\Component;

class Sidebar extends Component
{
    public $sidebarOpen = 'translate-x-0';
    public $with_reponsivos='w-12 sm:w-28 md:w-48 lg:w-64';
    public $icono_double_arrow = 'M453 815 213 575l240-240 42 42-198 198 198 198-42 42Zm253 0L466 575l240-240 42 42-198 198 198 198-42 42Z';
    public $smblock= 'sm:block';
    public $smhidden= 'sm:hidden';
    public function toggleSidebar()
    {
        if($this->sidebarOpen == 'translate-x-0'){
            $this->sidebarOpen = 'lg:-translate-x-52 md:-translate-x-36 sm:-translate-x-16 -translate-x-0';
            $this->with_reponsivos= 'w-12';
            $this->icono_double_arrow= 'm255 815-42-42 198-198-198-198 42-42 240 240-240 240Zm253 0-42-42 198-198-198-198 42-42 240 240-240 240Z';
            $this->smblock = '';
            $this->smhidden = '';

        }else{
            $this->sidebarOpen = 'translate-x-0';
            $this->with_reponsivos= 'w-12 sm:w-28 md:w-48 lg:w-64';
            $this->icono_double_arrow= 'M453 815 213 575l240-240 42 42-198 198 198 198-42 42Zm253 0L466 575l240-240 42 42-198 198 198 198-42 42Z';
            $this->smblock = 'sm:block';
            $this->smhidden = 'sm:hidden';
        }
        
    }
    public function render()
    {
        return view('livewire.sidebar.sidebar');
    }
}
