@extends('layouts.app')
@section('content')
    <h1>Коробка передач: {{ $transmission->name }}</h1>
    <p>Тип: {{ $transmission->type }}</p>
    
    <h3 class="mt-4">Машины с этой коробкой:</h3>
    <ul>
        @foreach($transmission->cars as $car)
            <li>{{ $car->model->name }} (Паспорт: {{ $car->pasport }})</li>
        @endforeach
    </ul>
    <a href="/transmissions" class="btn btn-secondary mt-3">← Назад</a>
@endsection