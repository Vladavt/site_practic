@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Цвета</h1>
        <a href="/colors/create" class="btn btn-success">+ Добавить цвет</a>
    </div>

    <div class="row">
        @foreach($colors as $color)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5>{{ $color->name }}</h5>
                        <p>Тип: {{ $color->type }}</p>
                        
                        <div class="d-flex gap-2">
                            <a href="/colors/{{ $color->id }}" class="btn btn-primary btn-sm">Смотреть</a>
                            <a href="/colors/{{ $color->id }}/edit" class="btn btn-warning btn-sm">Ред.</a>
                            <form action="/colors/{{ $color->id }}" method="POST" onsubmit="return confirm('Удалить цвет?')">
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