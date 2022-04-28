<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
<<<<<<< HEAD
    protected $fillable = ['product_name', 'product_description', 'product_image', 'product_code', 'product_quantity', 'product_price', 'product_date', 'category_id', 'brand_id'];
    function categories()
    {
        return $this->belongsTo(Category::class);
    }
=======
    protected $fillable = ['product_name', 'product_description', 'product_image', 'product_quantity', 'product_price', 'product_date', 'category_id'];
    // function categories()
    // {
    //     return $this->belongsTo(Category::class);
    // }
    /// article has many comment when pernt is null
    // public function orders()
    // {
    //     return $this->hasMany(Order::class);
    // }
    //      public function categories()
    // {
    //     return $this->belongsTo(Category::class);
    // }
>>>>>>> 9f40b7d8c47432f1b935413ee4195b228a4849dd
    /// article has many comment when pernt is null
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
    public function categories()
    {
        return $this->hasMany(Category::class);
    }
    public function brands()
    {
        return $this->hasMany(brands::class);
    }

}
