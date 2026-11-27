@extends('layouts.app')
@section('content')
    <h1>Добавить коробку передач</h1>
    <form action="/transmissions" method="POST">
        @csrf
        <div class="mb-3">
            <label>Название:</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Тип (AT, MT, CVT):</label>
            <input type="text" name="type" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Сохранить</button>
        <a href="/transmissions" class="btn btn-secondary">Отмена</a>
    </form>
@endsection