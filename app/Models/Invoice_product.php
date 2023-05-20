<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice_product extends Model
{
    use HasFactory;

    protected $table = 'invoice_product';

    public $incrementing = true;

    protected $fillable = [
        'product_id',
        'invoice_id',
        'cantidad_detalle',
        'precio_unitario',
    ];

    protected $foreignKey1 = 'product_id';

    protected $foreignKey2 = 'invoice_id';

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function invoice()
    {
        return $this->belongsTo(Invoice::class, 'invoice_product', $this->foreignKey1, $this->foreignKey2)->withPivot(['cantidad_detalle', 'precio_unitario']);
    }
}
