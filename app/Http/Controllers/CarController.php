<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\CarModel;
use App\Models\Color;
use App\Models\Transmission;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::with('model.brand', 'color', 'transmission')->get();
        return view('cars.index', compact('cars'));
    }

    public function create()
    {
        $models = CarModel::with('brand')->get();
        $colors = Color::all();
        $transmissions = Transmission::all();
        return view('cars.create', compact('models', 'colors', 'transmissions'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'pasport' => 'required|string',
            'year' => 'required|integer',
            'price' => 'required',
            'mileage' => 'required|integer',
            'status' => 'required|string',
            'model_id' => 'required|exists:models,id',
            'color_id' => 'required|exists:colors,id',
            'transmission_id' => 'required|exists:transmissions,id',
        ]);

        Car::create($request->all());

        return redirect('/cars')->with('success', 'Машина успешно добавлена!');
    }

    public function show($id)
    {
        $car = Car::with('model.brand.country', 'color', 'transmission')->findOrFail($id);
        return view('cars.show', compact('car'));
    }

    public function edit($id)
    {
        $car = Car::findOrFail($id);
        $models = CarModel::with('brand')->get();
        $colors = Color::all();
        $transmissions = Transmission::all();
        return view('cars.edit', compact('car', 'models', 'colors', 'transmissions'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'pasport' => 'required|string',
            'year' => 'required|integer',
            'price' => 'required',
            'mileage' => 'required|integer',
            'status' => 'required|string',
            'model_id' => 'required|exists:models,id',
            'color_id' => 'required|exists:colors,id',
            'transmission_id' => 'required|exists:transmissions,id',
        ]);

        $car = Car::findOrFail($id);
        $car->update($request->all());

        return redirect('/cars')->with('success', 'Машина обновлена!');
    }

    public function destroy($id)
    {
        Car::findOrFail($id)->delete();
        return redirect('/cars')->with('success', 'Машина удалена!');
    }
}