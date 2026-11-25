<?php

namespace App\Http\Controllers;

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
}