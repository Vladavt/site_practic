@extends('layouts.app')
@section('content')
    <h1>Добавить новый цвет</h1>
    <form action="/colors" method="POST">
        @csrf
        <div class="mb-3">
            <label>Название цвета:</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        
        <div class="mb-3">
            <label>Тип (Металлик, Мат и т.д.):</label>
            <input type="text" name="type" class="form-control" required>
        </div>
        
        <button type="submit" class="btn btn-success">Сохранить</button>
        <a href="/colors" class="btn btn-secondary">Отмена</a>
    </form>
@endsection