@extends('layouts.app')
@section('content')
    <h1>Редактировать страну: {{ $country->name }}</h1>
    <form action="/countries/{{ $country->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Название страны:</label>
            <input type="text" name="name" class="form-control" value="{{ $country->name }}" required>
        </div>
        <button type="submit" class="btn btn-warning">Обновить</button>
        <a href="/countries" class="btn btn-secondary">Отмена</a>
    </form>
@endsection