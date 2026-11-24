<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $fillable = ['name', 'type'];
    
    public function cars()
    {
        return $this->hasMany(Car::class);
    }
}