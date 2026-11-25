<?php

namespace App\Http\Controllers;

use App\Models\CarModel;
use Illuminate\Http\Request;

class CarModelController extends Controller
{
    public function index()
    {
        $models = CarModel::with('brand')->get();
        return view('models.index', compact('models'));
    }

    public function show($id)
    {
        $model = CarModel::with('brand', 'cars')->findOrFail($id);
        return view('models.show', compact('model'));
    }
}