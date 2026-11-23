<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = ['pasport', 'year', 'price', 'mileage', 'status', 'model_id', 'color_id', 'transmission_id'];
}
