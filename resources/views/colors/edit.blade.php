@extends('layouts.app')
@section('content')
    <h1>Редактировать цвет: {{ $color->name }}</h1>
    <form action="/colors/{{ $color->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Название цвета:</label>
            <input type="text" name="name" class="form-control" value="{{ $color->name }}" required>
        </div>
        
        <div class="mb-3">
            <label>Тип:</label>
            <input type="text" name="type" class="form-control" value="{{ $color->type }}" required>
        </div>
        
        <button type="submit" class="btn btn-warning">Обновить</button>
        <a href="/colors" class="btn btn-secondary">Отмена</a>
    </form>
@endsection