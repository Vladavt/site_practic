<?php

namespace App\Http\Controllers;

use App\Models\Transmission;
use Illuminate\Http\Request;

class TransmissionController extends Controller
{
    public function index()
    {
        $transmissions = Transmission::all();
        return view('transmissions.index', compact('transmissions'));
    }

    public function create()
    {
        return view('transmissions.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
        ]);

        Transmission::create($request->all());

        return redirect('/transmissions')->with('success', 'Коробка передач добавлена!');
    }

    public function show($id)
    {
        $transmission = Transmission::with('cars.model')->findOrFail($id);
        return view('transmissions.show', compact('transmission'));
    }

    public function edit($id)
    {
        $transmission = Transmission::findOrFail($id);
        return view('transmissions.edit', compact('transmission'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
        ]);

        $transmission = Transmission::findOrFail($id);
        $transmission->update($request->all());

        return redirect('/transmissions')->with('success', 'Коробка передач обновлена!');
    }

    public function destroy($id)
    {
        Transmission::findOrFail($id)->delete();
        return redirect('/transmissions')->with('success', 'Коробка передач удалена!');
    }
}