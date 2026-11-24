<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = ['pasport', 'year', 'price', 'mileage', 'status', 'model_id', 'color_id', 'transmission_id'];

    public function model()
    {
        return $this->belongsTo(CarModel::class, 'model_id');
    }
    public function color()
    {
        return $this->belongsTo(Color::class);
    }
    public function transmission()
    {
        return $this->belongsTo(Transmission::class);
    }
}