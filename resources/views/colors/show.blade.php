@extends('layouts.app')
@section('content')
    <h1>Цвет: {{ $color->name }} ({{ $color->type }})</h1>
    
    <h3 class="mt-4">Машины этого цвета:</h3>
    <ul>
        @foreach($color->cars as $car)
            <li>{{ $car->model->name }} (Год: {{ $car->year }})</li>
        @endforeach
    </ul>
    <a href="/colors" class="btn btn-secondary mt-3">← Назад</a>
@endsection