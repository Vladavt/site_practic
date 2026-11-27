@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Модель: {{ $model->brand->name }} {{ $model->name }}</h1>
        <div class="d-flex gap-2">
            <a href="/models/{{ $model->id }}/edit" class="btn btn-warning">Редактировать</a>
            <a href="/models" class="btn btn-secondary">← Назад к списку</a>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-body">
            <p><strong>Бренд:</strong> {{ $model->brand->name }}</p>
            <p><strong>Тип кузова:</strong> {{ $model->body_type }}</p>
            <p><strong>Годы выпуска:</strong> с {{ $model->year_from }} по {{ $model->year_to }}</p>
        </div>
    </div>
    
    <h3>Машины этой модели:</h3>
    @if($model->cars->isEmpty())
        <p>Машин этой модели пока нет в базе.</p>
    @else
        <ul>
            @foreach($model->cars as $car)
                <li>
                    <a href="/cars/{{ $car->id }}">{{ $car->pasport }}</a> 
                    ({{ $car->year }} г., {{ $car->price }})
                </li>
            @endforeach
        </ul>
    @endif
@endsection

