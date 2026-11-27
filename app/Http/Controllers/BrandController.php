<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Country;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::with('country')->get();
        return view('brands.index', compact('brands'));
    }

    public function create()
    {
        $countries = Country::all();
        return view('brands.create', compact('countries'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'create_year' => 'required|integer',
            'country_id' => 'required|exists:countries,id', // проверяем, что такая страна есть в БД
        ]);

        Brand::create([
            'name' => $request->name,
            'create_year' => $request->create_year,
            'country_id' => $request->country_id,
        ]);

        return redirect('/brands')->with('success', 'Бренд успешно добавлен!');
    }

    public function show($id)
    {
        $brand = Brand::with('country', 'models')->findOrFail($id);
        return view('brands.show', compact('brand'));
    }

    public function edit($id)
    {
        $brand = Brand::findOrFail($id);
        $countries = Country::all();
        return view('brands.edit', compact('brand', 'countries'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'create_year' => 'required|integer',
            'country_id' => 'required|exists:countries,id',
        ]);

        $brand = Brand::findOrFail($id);
        $brand->update([
            'name' => $request->name,
            'create_year' => $request->create_year,
            'country_id' => $request->country_id,
        ]);

        return redirect('/brands')->with('success', 'Бренд обновлен!');
    }

    public function destroy($id)
    {
        $brand = Brand::findOrFail($id);
        $brand->delete();

        return redirect('/brands')->with('success', 'Бренд удален!');
    }
}

