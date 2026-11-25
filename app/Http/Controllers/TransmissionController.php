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

    public function show($id)
    {
        $transmission = Transmission::with('cars.model')->findOrFail($id);
        return view('transmissions.show', compact('transmission'));
    }
}