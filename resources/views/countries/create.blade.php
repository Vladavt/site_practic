@extends('layouts.app')
@section('content')
    <h1>Добавить страну</h1>
    <form action="/countries" method="POST">
        @csrf
        <div class="mb-3">
            <label>Название страны:</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Сохранить</button>
        <a href="/countries" class="btn btn-secondary">Отмена</a>
    </form>
@endsection