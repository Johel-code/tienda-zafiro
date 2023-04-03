<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $fillable=[
        

    ]; 

    //Relacion uno a muchos (inversa)
    public function invoice_product(){
    return $this->belongsTo('app\Http\Model\Invoice_product');
    }

    public function user(){
        return $this->belongsTo('app\Http\Model\User');
    }

    public function customer(){
        return $this->hasOne('app\Http\Model\Customer');
    }

}
