<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['product_name', 'product_description', 'product_image', 'product_code', 'product_quantity', 'product_price', 'product_date', 'category_id', 'brand_id'];
    function categories()
    {
        return $this->belongsTo(Category::class);
    }
    /// article has many comment when pernt is null
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
