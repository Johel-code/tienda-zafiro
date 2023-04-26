<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'fecha_ini',
        'fecha_fin',
        'salario'  
    ]; 
    
    public function user() {
        return $this->hasOne('app\Http\Model\User');
    } 
}
