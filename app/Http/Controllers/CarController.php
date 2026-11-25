<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::with('model.brand', 'color', 'transmission')->get();
        
        return view('cars.index', compact('cars'));
    }

    public function show($id)
    {
        $car = Car::with('model.brand.country', 'color', 'transmission')->findOrFail($id);
        
        return view('cars.show', compact('car'));
    }
}