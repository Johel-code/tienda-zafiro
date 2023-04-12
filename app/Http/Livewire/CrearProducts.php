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
        $categoria, $fecha, $estado, $foto, $id_product,
        $proveedor, $cantidad_minima, $adquisicion, $categorias, $proveedors;

    protected $rules = [


        'nombre' => 'required|max:50|string',
        'foto' => 'required|image|max:1024|mimes:jpg,jpeg,png',
        'cantidad' => 'required|numeric|min:1 ',
        'precio' => 'required|numeric |min:1 ',
        'marca' => 'required|max: 25| string',
        'categoria' => 'required',
        'descripcion' => 'required|max: 100|string',
        'fecha' => 'required|date | after:start_date'
    ];

    protected $messages = [
        'nombre.required' => 'El campo nombre es requerido',
        'nombre.string' => 'El campo nombre no admite caracteres epeciales',
        'nombre.max' => 'El nombre no debe tener mas de 50 caracteres',
        'descripcion.required' => 'El campo descripcion es requerido',
        'descripcion.max: 100' =>'Solo se admiten 100 caracteres',
        'cantidad.required' => 'El campo cantidad es requerido',
        'cantidad.numeric' => 'Solo se admiten números enteros',
        'cantidad.min:1' => 'No se admiten números negativos',
        'estado.required' => 'El campo estado es requerido',
        'foto.required' => 'El campo foto es requerido',
        'foto.max:1024' => 'Solo se permite como maximo 1024',
        'foto.mimes:jpg,jpeg,png' => 'Solo se admite una imagen o foto',
        'precio.required' => 'El campo precio es requerido',
        'precio.min:1' => 'El valor minimo a ingresar es 1',
        'marca.required' => 'El campo marca es requerido',
        'marca.max:25' => 'Solo se admiten maximo 25 caracteres',
        'marca.string' => 'No se admiten caracteres especiales',
        'categoria.required' =>'El campo categoria es requerido',
        'fecha.required' => 'El campo fecha es requerido',
        'fecha.after:start_date' => 'Debe ingresar una fecha posterior a la actual'
    ];

    public function render()
    {
        return view('livewire.crear-products');
    }

    public function limpiar()
    {
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
        Product::updateOrCreate(
            ['id' => $this->id_product],
            [
                'codigo' => random_int(10000, 99999),
                'name_product' => $this->nombre,
                'descripcion' => $this->descripcion,
                'cantidad_inventario' => $this->cantidad,
                'cantidad_minima' => $this->cantidad_minima,
                'costo_adquisicion' => $this->adquisicion,
                'precio' => $this->precio,
                'marca' => $this->marca,
                'category_id' => $this->categoria,
                'fecha_vencimiento' => $this->fecha,
                'provider_id' => $this->proveedor,
                'image' => $this->foto ? url($this->foto) : 'default_image.jpg',
            ]
        );
        session()->flash('message', '¡Producto añadido exitosamente!');
        $this->limpiar();
    }
}
