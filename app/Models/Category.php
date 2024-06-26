<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_categoy'
    ];

    public function product(){
        return $this->hasOne('app\Http\Model\Product');
    }
}
