<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'product_id', 'order_quantity', 'order_price', 'checkid'];

    function products()
    {
        return $this->belongsTo(Product::class);
    }
    function users()
    {
        return $this->belongsTo(User::class);
    }
}
