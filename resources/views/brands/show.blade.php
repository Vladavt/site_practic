@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Бренд: {{ $brand->name }}</h1>
        <div class="d-flex gap-2">
            <a href="/brands/{{ $brand->id }}/edit" class="btn btn-warning">Редактировать</a>
            <a href="/brands" class="btn btn-secondary">← Назад к списку</a>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-body">
            <p><strong>Страна:</strong> {{ $brand->country->name }}</p>
            <p><strong>Год основания:</strong> {{ $brand->create_year }}</p>
        </div>
    </div>
    
    <h3>Модели этого бренда:</h3>
    @if($brand->models->isEmpty())
        <p>У этого бренда пока нет моделей.</p>
    @else
        <ul>
            @foreach($brand->models as $model)
                <li>
                    <a href="/models/{{ $model->id }}">{{ $model->name }}</a> 
                    ({{ $model->body_type }})
                </li>
            @endforeach
        </ul>
    @endif
@endsection