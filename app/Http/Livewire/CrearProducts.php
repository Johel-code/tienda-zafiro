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
        'nombre' => 'required|max:15|alpha_num',
        'foto' => 'max:1024|mimes:jpg,jpeg,png',
        'cantidad' => 'required|numeric|min:1 ',
        'precio' => 'required|numeric |min:1 ',
        'marca' => 'required|max:10| alpha_num',
        'cantidad_minima' => 'required|numeric|min:1',
        'adquisicion' => 'required|numeric|min:1',
        'categoria' => 'required',
        'proveedor'  => 'required',
        'descripcion' => 'max:50',
        'fecha' => 'after:tomorrow|nullable'
    ];

    protected $messages = [
        'proveedor.required' => 'El campo es requerido',
        'adquisicion.required' => 'El campo es requerido',
        'adquisicion.numeric' => 'Solo se admiten números enteros',
        'adquisicion.min' => 'No se admiten números negativos',
        'cantidad_minima.required' => 'El campo es requerido',
        'cantidad_minima.numeric' => 'Solo se admiten números enteros',
        'cantidad_minima.min' => 'No se admiten números negativos',
        'nombre.required' => 'El campo nombre es requerido',
        'nombre.alpha_num' => 'El campo nombre solo puede tener letras y números',
        'nombre.max' => 'El nombre no debe tener más de 15 caracteres',
        'descripcion.max' =>'Solo se admiten 50 caracteres',
        'cantidad.required' => 'El campo cantidad es requerido',
        'cantidad.numeric' => 'Solo se admiten números enteros',
        'cantidad.min' => 'No se admiten números negativos',
        'estado.required' => 'El campo estado es requerido',
        'foto.max' => 'Solo se permite como maximo 1024',
        'foto.mimes' => 'Solo se admite una imagen o foto',
        'precio.required' => 'El campo precio es requerido',
        'precio.min' => 'El valor minimo a ingresar es 1',
        'marca.required' => 'El campo marca es requerido',
        'marca.max' => 'Solo se admiten máximo 10 caracteres',
        'marca.alpha_num' => 'Solo puede ingresar letras y números',
        'categoria.required' => 'El campo categoria es requerido',
        'fecha.after' => 'Debe ingresar una fecha posterior a la actual'
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
