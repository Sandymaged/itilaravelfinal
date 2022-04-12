<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Problem extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'description', 'status', 'mobile_type'];

    function users()
    {
        return $this->belongsTo(User::class);
    }
}
