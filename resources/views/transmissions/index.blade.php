@extends('layouts.app')
@section('content')
    <h1>Коробки передач</h1>
    <div class="row">
        @foreach($transmissions as $transmission)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5>{{ $transmission->name }}</h5>
                        <p>Тип: {{ $transmission->type }}</p>
                        <a href="/transmissions/{{ $transmission->id }}" class="btn btn-primary">Подробнее</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection