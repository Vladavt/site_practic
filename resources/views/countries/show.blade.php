@extends('layouts.app')
@section('content')
    <h1>Страна: {{ $country->name }}</h1>
    
    <h3 class="mt-4">Бренды из этой страны:</h3>
    <ul>
        @foreach($country->brands as $brand)
            <li>{{ $brand->name }}</li>
        @endforeach
    </ul>
    <a href="/countries" class="btn btn-secondary mt-3">← Назад</a>
@endsection