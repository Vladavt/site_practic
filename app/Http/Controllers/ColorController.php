<?php

namespace App\Http\Controllers;
//a
use App\Models\Color;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    public function index()
    {
        $colors = Color::all();
        return view('colors.index', compact('colors'));
    }

    public function show($id)
    {
        $color = Color::with('cars.model')->findOrFail($id);
        return view('colors.show', compact('color'));
    }
    public function create()
{
    return view('colors.create');
}
public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'type' => 'required|string|max:255',
    ]);

    \App\Models\Color::create([
        'name' => $request->name,
        'type' => $request->type,
    ]);

    return redirect('/colors')->with('success', 'Цвет успешно добавлен!');
}
public function edit($id)
{
    $color = \App\Models\Color::findOrFail($id);
    return view('colors.edit', compact('color'));
}
public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'type' => 'required|string|max:255',
    ]);

    $color = \App\Models\Color::findOrFail($id);
    $color->update([
        'name' => $request->name,
        'type' => $request->type,
    ]);

    return redirect('/colors')->with('success', 'Цвет обновлен!');
}
public function destroy($id)
{
    $color = \App\Models\Color::findOrFail($id);
    $color->delete();

    return redirect('/colors')->with('success', 'Цвет удален!');
}

}