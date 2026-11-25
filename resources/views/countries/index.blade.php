@extends('layouts.app')
@section('content')
    <h1>Страны</h1>
    <div class="row">
        @foreach($countries as $country)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5>{{ $country->name }}</h5>
                        <a href="/countries/{{ $country->id }}" class="btn btn-primary">Подробнее</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection