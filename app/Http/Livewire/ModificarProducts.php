<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use App\Models\Provider;
use Livewire\Component;

class ModificarProducts extends Component
{

    public $product;
    public bool $modal_modificar= true;

    public $nombre, $descripcion, $cantidad, $precio, $marca,
            $categoria, $fecha, $estado, $foto,$id_product, 
            $proveedor,$cantidad_minima, $adquisicion,$categorias, $proveedors;

    protected $rules = [
        ////'foto' => 'image|max:1024|mimes:jpg,jpeg,png',
        
        'cantidad' => 'required|numeric|min:1|max:999999999 ',
        'precio' => 'required|numeric |min:0.01|max:9999.99 ',
        'cantidad_minima' => 'required|numeric|min:1|max:999999999',
        'adquisicion' => 'required|numeric|min:0.01|max:9999.99',
        'proveedor'  => 'required',
        'fecha' => 'after:today|nullable'
    ];
    protected $messages = [
            'proveedor.required' => 'Este campo es obligatorio',

            'adquisicion.required' => 'Este campo es obligatorio',
            'adquisicion.numeric' => 'Solo se admiten números enteros',
            'adquisicion.min' => 'Ingrese números mayores a 0',
            'adquisicion.max' => 'Se admite solo 4 digitos enteros',

            'cantidad_minima.required' => 'Este campo es obligatorio',
            'cantidad_minima.numeric' => 'Solo se admiten números enteros',
            'cantidad_minima.min' => 'Ingrese números mayores a 0',
            'cantidad_minima.max' => 'Se admite solo 9 digitos enteros',

            'cantidad.required' => 'Este campo es obligatorio',
            'cantidad.numeric' => 'Solo se admiten números enteros',
            'cantidad.min' => 'Ingrese números mayores a 0',
            'cantidad.max' => 'Se admite solo 9 digitos enteros',

            //'estado.required' => 'El campo estado es requerido',
            //'foto.required' => 'El campo foto es requerido',
            // 'foto.max' => 'Solo se permite como maximo 1024',
            // 'foto.image' => 'Solo se admite una imagen o foto',

            'precio.required' => 'Este campo es obligatorio',
            'precio.min' => 'Ingrese números mayores a 0',
            'precio.max' => 'Se admite solo 4 digitos enteros',

            'categoria.required' => 'Este campo es obligatorio',

            'fecha.after' => 'Debe ingresar una fecha posterior a la actual'

        ];


    public function mount($id)
    {
        $this->product = Product::find($id);
        $this->nombre = $this->product->name_product;
        $this->descripcion = $this->product->descripcion;
        $this->cantidad = $this->product->cantidad_inventario;
        $this->cantidad_minima = $this->product->cantidad_minima;
        $this->categoria = Category::find($this->product->category_id)->name_categoy;
        $this->marca = $this->product->marca;
        $this->adquisicion = $this->product->costo_adquisicion;
        $this->precio = $this->product->precio;
        $this->proveedors = Provider::all();
        $this->proveedor = $this->product->provider_id;
        $this->fecha = $this->product->fecha_vencimiento;
    }

    public function render()
    {
        
        return view('livewire.modificar-products')
            ->extends('layouts.web')
            ->section('content');
    }
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function cancelar(){
        return redirect()->to('/');
    }
    public function submit()
    {
        $this->validate();
        //$imageName = time().'-'.$this->foto->getClientOriginalName();
            //dd(asset('images/'.$imageName));

        //$this->foto->storeAs('/images', $imageName, 'uploads_image');
        //dd(asset('uploads/images/'.$imageName));
        Product::updateOrCreate(
            ['id' => $this->product->id],[
                'cantidad_inventario' => $this->cantidad,
                'cantidad_minima'=> $this->cantidad_minima,
                'costo_adquisicion'=> $this->adquisicion,
                'precio' => $this->precio,
                'fecha_vencimiento' => $this->fecha,
                'provider_id' => $this->proveedor,
                //'image' => $this->foto ? url($this->foto) : 'default_image.jpg',
            ]
        );
        session()->flash('message','¡Producto actualizado exitosamente!');

        return redirect()->to('/');

    }


}
