<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Product;
use App\Models\Category;
use App\Models\Provider;

class CrearProducts extends Component
{
    use WithFileUploads;
    public $nombre, $descripcion, $cantidad, $precio, $marca,
            $categoria, $fecha, $estado, $foto,$id_product, 
            $proveedor,$cantidad_minima, $adquisicion,$categorias, $proveedors;

    protected $rules = [
        'nombre' => 'required|max:4',
        'estado' => 'required',
        'foto' => 'required|image|max:1024',
        'cantidad' => 'required',
        'precio' => 'required',
        'marca' => 'required',
        'categoria' => 'required',
        'descripcion' => 'required'
    ];

    protected $messages = [
        'nombre.required' => 'El campo nombre es requerido',
        'nombre.max' => 'El nombre no debe tener mas de 20 caracteres',
        'descripcion.required' => 'El campo descripcion es requerido'
    ];

    public function render()
    {   
        return view('livewire.crear-products');
    }

    public function limpiar(){
        $this->nombre = '';
        $this->cantidad = '';
        $this->precio = '';
        $this->marca = '';
        $this->categoria = '';
        $this->fecha = '';
        $this->estado = '';
        $this->foto = '';
        $this->proveedor = '';
        $this->cantidad_minima = '';
        $this->descripcion = '';
        $this->adquisicion = '';
        //session()->flash('success','¡LIMPIO!');
    }

    public function mount()
    {
        $this->categorias = Category::all();
        $this->proveedors = Provider::all();
    }
    public function save()
{
        $this->validate([
            'foto' => 'image|max:1024', // validar que se cargó una imagen y que es menor a 1MB
        ]);

        if ($this->foto) {
            $path = $this->foto->storePublicly('public/images');
            $this->foto = str_replace('public', 'storage', $path);
        }
}
    public function submit()
    {   
        $this->validate();
        Product::updateOrCreate(['id'=>$this->id_product],
            [
                'codigo' =>random_int(10000, 99999),
                'name_product' => $this->nombre,
                'descripcion' => $this->descripcion,
                'cantidad_inventario' => $this->cantidad,
                'cantidad_minima'=> $this->cantidad_minima,
                'costo_adquisicion'=> $this->adquisicion,
                'precio' => $this->precio,
                'marca' => $this->marca,
                'category_id' => $this->categoria, 
                'fecha_vencimiento' => $this->fecha,
                'estado_product' => $this->estado,
                'provider_id' => $this->proveedor, 
                'image' => $this->foto ? url($this->foto) : 'default_image.jpg',
            ]
        );
        session()->flash('message','¡Producto añadido exitosamente!');
        $this->limpiar();
    }
}
