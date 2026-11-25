@extends('layouts.app')
@section('content')
    <h1>Модель: {{ $model->brand->name }} {{ $model->name }}</h1>
    <p>Тип кузова: {{ $model->body_type }}</p>
    <p>Годы выпуска: с {{ $model->year_from }} по {{ $model->year_to }}</p>
    
    <h3 class="mt-4">Машины этой модели:</h3>
    <ul>
        @foreach($model->cars as $car)
            <li>{{ $car->pasport }} — {{ $car->year }} г.</li>
        @endforeach
    </ul>
    <a href="/models" class="btn btn-secondary mt-3">← Назад</a>
@endsection