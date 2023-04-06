<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
class Products extends Component
{
    public $searchTerm = "";
    public $products;
    public function render()
    {
        if(emputy($this ->searchTerm)){
            $this-> products = User::where('name',$this->searchTerm)->get();

        }else{
            $this->products= User::where('name','like','%'.$this->searchTerm.'%')->get ();
        }
        return view('livewire.products');
    }
}
