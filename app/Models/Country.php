<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = ['name'];

    // Связь: у одной страны много брендов
    public function brands()
    {
        return $this->hasMany(Brand::class);
    }
}