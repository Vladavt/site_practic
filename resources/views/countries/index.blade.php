@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Страны</h1>
        <a href="/countries/create" class="btn btn-success">+ Добавить страну</a>
    </div>

    <div class="row">
        @foreach($countries as $country)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5>{{ $country->name }}</h5>
                        
                        <div class="d-flex gap-2">
                            <a href="/countries/{{ $country->id }}" class="btn btn-primary btn-sm">Смотреть</a>
                            <a href="/countries/{{ $country->id }}/edit" class="btn btn-warning btn-sm">Ред.</a>
                            
                            <form action="/countries/{{ $country->id }}" method="POST" onsubmit="return confirm('Удалить страну?')">
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