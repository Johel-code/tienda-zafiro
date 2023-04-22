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
        'nombre' => 'required|max:35|regex:/^[a-zA-Z0-9 ]+$/',
        ////'foto' => 'image|max:1024|mimes:jpg,jpeg,png',

        'cantidad' => 'required|numeric|min:1|max:999999999999 ',
        'precio' => 'required|numeric |min:0.01|max:999999999999.99 ',
        'marca' => 'required|max:10|regex:/^[a-zA-Z0-9 ]+$/',
        'cantidad_minima' => 'required|numeric|min:1|max:999999999999',
        'adquisicion' => 'required|numeric|min:0.01|max:999999999999.99',
        'categoria' => 'required',
        'proveedor'  => 'required',
        'descripcion' => 'max:80',
        'fecha' => 'after:today|nullable'
    ];

    protected $messages = [
        'proveedor.required' => 'El campo es requerido',
        'adquisicion.required' => 'El campo debe contener números',
        'adquisicion.numeric' => 'Solo se admiten números enteros',
        'adquisicion.min' => 'Solo se aceptan números mayores a 0',
        'adquisicion.max' => 'El valor máximo a ingresar es 12 digitos enteros',
        'cantidad_minima.required' => 'El campo debe contener números',
        'cantidad_minima.numeric' => 'Solo se admiten números enteros',
        'cantidad_minima.min' => 'Solo se aceptan números mayores a 0',
        'cantidad_minima.max' => 'El valor máximo a ingresar es 12 digitos',

        'nombre.required' => 'El campo nombre es requerido',
        'nombre.regex' => 'El campo nombre solo puede tener letras y números',
        'nombre.max' => 'El nombre no debe tener más de 35 caracteres',
        'descripcion.max' => 'Solo se admiten 80 caracteres',
        'cantidad.required' => 'El campo debe contener números',
        'cantidad.numeric' => 'Solo se admiten números enteros',
        'cantidad.min' => 'Solo se aceptan números mayores a 0',
        'cantidad.max' => 'El valor máximo a ingresar es 12 digitos',
        'estado.required' => 'El campo estado es requerido',
        //'foto.required' => 'El campo foto es requerido',
        // 'foto.max' => 'Solo se permite como maximo 1024',
        // 'foto.image' => 'Solo se admite una imagen o foto',

        'precio.required' => 'El campo debe contener números',
        'precio.min' => 'Solo se aceptan números mayores a 0',
        'precio.max' => 'El valor máximo a ingresar es 12 digitos enteros',
        'marca.required' => 'El campo marca es requerido',
        'marca.max' => 'Solo se admiten 10 caracteres',
        'marca.regex' => 'Solo puede ingresar letras y números',
        'categoria.required' => 'El campo categoria es requerido',
        'fecha.after' => 'Debe ingresar una fecha posterior a la actual'

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
        session()->flash('message','¡LIMPIO!');
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
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    // public function save()
    // {
    //     // $this->validate([
    //     //     'foto' => 'image|max:1024', // validar que se cargó una imagen y que es menor a 1MB
    //     // ]);

    //     if ($this->foto) {
    //         $path = $this->foto->storePublicly('public/images');
    //         $this->foto = str_replace('public', 'storage', $path);
    //         dd($this);
    //     }
    // }
    public function submit()
    {
        $this->validate();
        if ($this->foto) {
            $path = $this->foto->storePublicly('public/images');
            $this->foto = str_replace('public', 'storage', $path);
        }
        Product::updateOrCreate(
            ['id' => $this->id_product],
            [
                'name_product' => $this->nombre,
                'descripcion' => $this->descripcion,
                'cantidad_inventario' => $this->cantidad,
                'cantidad_minima'=> $this->cantidad_minima,
                'costo_adquisicion'=> $this->adquisicion,
                'precio' => $this->precio,
                'marca' => $this->marca,
                'category_id' => $this->categoria, 
                'fecha_vencimiento' => $this->fecha,
                'provider_id' => $this->proveedor,
                'image' => $this->foto ? url($this->foto) : 'default_image.jpg',
                //'image' => $this->foto->store('images/', 'public_uploads')
            ]
        );
        session()->flash('message','¡Producto añadido exitosamente!');
        $this->limpiar();
    }
}
