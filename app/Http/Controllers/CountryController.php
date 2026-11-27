<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function index()
    {
        $countries = Country::all();
        return view('countries.index', compact('countries'));
    }

    public function create()
    {
        return view('countries.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Country::create([
            'name' => $request->name,
        ]);

        return redirect('/countries')->with('success', 'Страна успешно добавлена!');
    }

    public function show($id)
    {
        $country = Country::with('brands')->findOrFail($id);
        return view('countries.show', compact('country'));
    }

    public function edit($id)
    {
        $country = Country::findOrFail($id);
        return view('countries.edit', compact('country'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $country = Country::findOrFail($id);
        $country->update([
            'name' => $request->name,
        ]);

        return redirect('/countries')->with('success', 'Страна обновлена!');
    }

    public function destroy($id)
    {
        $country = Country::findOrFail($id);
        $country->delete();

        return redirect('/countries')->with('success', 'Страна удалена!');
    }
}

