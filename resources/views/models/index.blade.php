@extends('layouts.app')
@section('content')
    <h1>Модели автомобилей</h1>
    <div class="row">
        @foreach($models as $model)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5>{{ $model->brand->name }} {{ $model->name }}</h5>
                        <p>Тип кузова: {{ $model->body_type }}</p>
                        <a href="/models/{{ $model->id }}" class="btn btn-primary">Подробнее</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection