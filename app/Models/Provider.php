<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    use HasFactory;

    public function product(){
        return $this->hasMany('app\Http\Model\Product');
    }
    
    protected $fillable = [
        'name_provider',
        'name_empresa',
        'celular_provider',
        'direccion_distribuidora',
        'estado_provider'
    ];
}
