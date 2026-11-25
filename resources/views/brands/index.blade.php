@extends('layouts.app')
@section('content')
    <h1>Бренды автомобилей</h1>
    <div class="row">
        @foreach($brands as $brand)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5>{{ $brand->name }}</h5>
                        <p>Страна: {{ $brand->country->name }}</p>
                        <a href="/brands/{{ $brand->id }}" class="btn btn-primary">Подробнее</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection