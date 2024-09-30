<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price', 'category_id' , 'restaurant_id'];
    
    public function category()
    {
        return $this->belongsTo(category::class)->first();
    }

    public function restaurant()
    {
        return $this->belongsTo(restaurant::class)->first();
    }
}
