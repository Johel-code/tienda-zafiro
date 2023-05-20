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
    public function invoice_products(){
    return $this->hasMany(Invoice_product::class);
    }

    public function user(){
        return $this->belongsTo('app\Http\Model\User');
    }

    public function customer(){
        return $this->belongsTo(Customer::class);
    }

}
