<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    protected $table = 'OrderDetails';
    protected $primaryKey = 'detail_id';
    protected $fillable = [
        'order_id',
        'product_id',
        'product_name',
        'product_qty',
        'product_price',
    ];

    // Define relationships if any

    // For example, if you have a many-to-one relationship with orders, you can define it like this:
    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }

    // For example, if you have a many-to-one relationship with products, you can define it like this:
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
