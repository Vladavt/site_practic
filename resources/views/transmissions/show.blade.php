@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Коробка передач: {{ $transmission->name }}</h1>
        <div class="d-flex gap-2">
            <a href="/transmissions/{{ $transmission->id }}/edit" class="btn btn-warning">Редактировать</a>
            <a href="/transmissions" class="btn btn-secondary">← Назад к списку</a>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-body">
            <p><strong>Название:</strong> {{ $transmission->name }}</p>
            <p><strong>Тип:</strong> {{ $transmission->type }}</p>
        </div>
    </div>
    
    <h3>Машины с этой коробкой:</h3>
    @if($transmission->cars->isEmpty())
        <p>Машин с такой коробкой пока нет.</p>
    @else
        <ul>
            @foreach($transmission->cars as $car)
                <li>
                    <a href="/cars/{{ $car->id }}">{{ $car->model->brand->name }} {{ $car->model->name }}</a> 
                    ({{ $car->year }} г.)
                </li>
            @endforeach
        </ul>
    @endif
@endsection

