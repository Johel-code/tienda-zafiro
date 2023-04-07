<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_provider',
        'name_empresa',
        'celular_provider',
        'direccion_distribuidora',
        'estado_provider'
    ];
}
