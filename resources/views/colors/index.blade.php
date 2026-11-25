@extends('layouts.app')
@section('content')
    <h1>Цвета</h1>
    <div class="row">
        @foreach($colors as $color)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5>{{ $color->name }}</h5>
                        <p>Тип: {{ $color->type }}</p>
                        <a href="/colors/{{ $color->id }}" class="btn btn-primary">Подробнее</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection