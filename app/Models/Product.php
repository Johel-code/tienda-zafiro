<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = "products";
    public $timestamps = false;

    protected $fillable=[
        'name_product',
        'cantidad_inventario',
        'cantidad_minima',
        'precio',
        'marca',
        'fecha_vencimiento',
        'descripcion',
        'image',
        'estado_product',
        'costo_adquisicion',
        'category_id',
        'provider_id'
    ];

    //Relacion uno a muchos 
    public function invoice_product() {
        return $this->hasMany('app\Http\Model\Invoice_product');
    } 
    public function category(){
        return $this->hasOne(Category::class);
    }
    public function provider(){
        return $this->belongsTo('app\Http\Model\provider');
    }

}
