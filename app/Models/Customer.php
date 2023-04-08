<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    
    protected $fillable=[
        

    ];

    public function invoice(){
        return $this->hasOne('app\Http\Model\Invoice');
    }
}
