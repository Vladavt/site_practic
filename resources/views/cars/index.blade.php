@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Список автомобилей</h1>
        <a href="/cars/create" class="btn btn-success">+ Добавить машину</a>
    </div>

    <div class="row">
        @foreach($cars as $car)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5>{{ $car->model->brand->name }} {{ $car->model->name }}</h5>
                        <p>Год: {{ $car->year }} | Цена: {{ $car->price }}</p>
                        
                        <div class="d-flex gap-2">
                            <a href="/cars/{{ $car->id }}" class="btn btn-primary btn-sm">Смотреть</a>
                            <a href="/cars/{{ $car->id }}/edit" class="btn btn-warning btn-sm">Ред.</a>
                            
                            <form action="/cars/{{ $car->id }}" method="POST" onsubmit="return confirm('Удалить машину?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Удалить</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection