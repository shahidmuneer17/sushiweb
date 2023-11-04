<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'Orders';
    protected $primaryKey = 'order_id';
    protected $fillable = [
        'order_number',
        'customer_email',
        'order_date',
        'order_time',
        'total_order_price',
        'estimated_delivery_time',
        'location_lat',
        'location_lang',
    ];

    // Define relationships if any

    // For example, if you have a one-to-many relationship with order details, you can define it like this:
    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class, 'order_id');
    }
}
