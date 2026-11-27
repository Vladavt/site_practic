<?php

namespace App\Http\Controllers;

use App\Models\CarModel;
use App\Models\Brand;
use Illuminate\Http\Request;

class CarModelController extends Controller
{
    public function index()
    {
        $models = CarModel::with('brand')->get();
        return view('models.index', compact('models'));
    }

    public function create()
    {
        $brands = Brand::all();
        return view('models.create', compact('brands'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'body_type' => 'required|string|max:255',
            'year_from' => 'required|integer',
            'year_to' => 'required|integer',
            'brand_id' => 'required|exists:brands,id',
        ]);

        CarModel::create($request->all());

        return redirect('/models')->with('success', 'Модель успешно добавлена!');
    }

    public function show($id)
    {
        $model = CarModel::with('brand', 'cars')->findOrFail($id);
        return view('models.show', compact('model'));
    }

    public function edit($id)
    {
        $model = CarModel::findOrFail($id);
        $brands = Brand::all();
        return view('models.edit', compact('model', 'brands'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'body_type' => 'required|string|max:255',
            'year_from' => 'required|integer',
            'year_to' => 'required|integer',
            'brand_id' => 'required|exists:brands,id',
        ]);

        $model = CarModel::findOrFail($id);
        $model->update($request->all());

        return redirect('/models')->with('success', 'Модель обновлена!');
    }

    public function destroy($id)
    {
        CarModel::findOrFail($id)->delete();
        return redirect('/models')->with('success', 'Модель удалена!');
    }
}