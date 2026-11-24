<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    protected $fillable = ['name', 'body_type', 'year_from', 'year_to', 'brand_id'];
    
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
    public function cars()
    {
        return $this->hasMany(Car::class, 'model_id');
    }
}