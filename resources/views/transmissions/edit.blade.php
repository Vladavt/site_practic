@extends('layouts.app')
@section('content')
    <h1>Редактировать: {{ $transmission->name }}</h1>
    <form action="/transmissions/{{ $transmission->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Название:</label>
            <input type="text" name="name" class="form-control" value="{{ $transmission->name }}" required>
        </div>
        <div class="mb-3">
            <label>Тип:</label>
            <input type="text" name="type" class="form-control" value="{{ $transmission->type }}" required>
        </div>
        <button type="submit" class="btn btn-warning">Обновить</button>
        <a href="/transmissions" class="btn btn-secondary">Отмена</a>
    </form>
@endsection