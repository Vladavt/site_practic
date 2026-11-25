@extends('layouts.app')
@section('content')
    <h1>Список автомобилей</h1>
    //a
    <div class="row">
       @foreach($cars as $car)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5>{{ $car->model->brand->name }} {{ $car->model->name }}</h5>
                        <p>Год: {{ $car->year }} <br> Цена: ${{ $car->price }}</p>
                        <a href="/cars/{{ $car->id }}" class="btn btn-primary">Подробнее</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection