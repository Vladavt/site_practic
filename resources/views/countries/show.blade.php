@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Страна: {{ $country->name }}</h1>
        <div class="d-flex gap-2">
            <a href="/countries/{{ $country->id }}/edit" class="btn btn-warning">Редактировать</a>
            <a href="/countries" class="btn btn-secondary">← Назад к списку</a>
        </div>
    </div>

    <h3>Бренды из этой страны:</h3>
    @if($country->brands->isEmpty())
        <p>В этой стране пока нет зарегистрированных брендов.</p>
    @else
        <ul>
            @foreach($country->brands as $brand)
                <li>
                    <a href="/brands/{{ $brand->id }}">{{ $brand->name }}</a> 
                    (Год основания: {{ $brand->create_year }})
                </li>
            @endforeach
        </ul>
    @endif
@endsection