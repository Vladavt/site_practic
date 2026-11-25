@extends('layouts.app')
@section('content')
    <h1>Бренд: {{ $brand->name }}</h1>
    <p>Год основания: {{ $brand->create_year }}</p>
    <p>Страна: {{ $brand->country->name }}</p>
    //a
    <h3 class="mt-4">Модели этого бренда:</h3>
    <ul>
        @foreach($brand->models as $model)
            <li>{{ $model->name }} ({{ $model->body_type }})</li>
        @endforeach
    </ul>
    <a href="/brands" class="btn btn-secondary mt-3">← Назад</a>
@endsection