@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Машина: {{ $car->model->brand->name }} {{ $car->model->name }}</h1>
        <div class="d-flex gap-2">
            <a href="/cars/{{ $car->id }}/edit" class="btn btn-warning">Редактировать</a>
            <a href="/cars" class="btn btn-secondary">← Назад к списку</a>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-body">
            <p><strong>Паспорт:</strong> {{ $car->pasport }}</p>
            <p><strong>Год:</strong> {{ $car->year }}</p>
            <p><strong>Цена:</strong> {{ $car->price }}</p>
            <p><strong>Пробег:</strong> {{ $car->mileage }} км</p>
            <p><strong>Статус:</strong> {{ $car->status }}</p>
            <hr>
            <p><strong>Цвет:</strong> {{ $car->color->name }}</p>
            <p><strong>Коробка:</strong> {{ $car->transmission->name }}</p>
            <p><strong>Страна бренда:</strong> {{ $car->model->brand->country->name }}</p>
        </div>
    </div>
@endsection