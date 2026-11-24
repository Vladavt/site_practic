<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = ['name', 'create_year', 'country_id'];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
    public function models()
    {
        return $this->hasMany(CarModel::class, 'brand_id');
    }
}