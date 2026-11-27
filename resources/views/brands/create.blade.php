@extends('layouts.app')
@section('content')
    <h1>Добавить бренд</h1>
    <form action="/brands" method="POST">
        @csrf
        <div class="mb-3">
            <label>Название бренда:</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Год основания:</label>
            <input type="number" name="create_year" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Страна:</label>
            <select name="country_id" class="form-control" required>
                <option value="">— Выберите страну --</option>
                @foreach($countries as $country)
                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-success">Сохранить</button>
        <a href="/brands" class="btn btn-secondary">Отмена</a>
    </form>
@endsection