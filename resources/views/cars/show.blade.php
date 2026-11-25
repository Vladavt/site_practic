@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h1>{{ $car->model->brand->name }} {{ $car->model->name }}</h1>
        </div>
        <div class="card-body">
            <p><strong>Год:</strong> {{ $car->year }}</p>
            <p><strong>Пробег:</strong> {{ $car->mileage }} км</p>
            
            <hr>
            <p><strong>Цвет:</strong> {{ $car->color->name }}</p>
            <p><strong>Коробка:</strong> {{ $car->transmission->name }}</p>
            <p><strong>Страна бренда:</strong> {{ $car->model->brand->country->name }}</p>
        </div>
        <div class="card-footer">
            <a href="/cars" class="btn btn-secondary">← Назад к списку</a>
        </div>
    </div>
@endsection