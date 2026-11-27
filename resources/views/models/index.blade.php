@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Модели автомобилей</h1>
        <a href="/models/create" class="btn btn-success">+ Добавить модель</a>
    </div>

    <div class="row">
        @foreach($models as $model)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5>{{ $model->brand->name }} {{ $model->name }}</h5>
                        <p>Кузов: {{ $model->body_type }}</p>
                        
                        <div class="d-flex gap-2">
                            <a href="/models/{{ $model->id }}" class="btn btn-primary btn-sm">Смотреть</a>
                            <a href="/models/{{ $model->id }}/edit" class="btn btn-warning btn-sm">Ред.</a>
                            
                            <form action="/models/{{ $model->id }}" method="POST" onsubmit="return confirm('Удалить модель?')">
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