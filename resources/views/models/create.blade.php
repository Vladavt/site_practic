@extends('layouts.app')
@section('content')
    <h1>Добавить модель</h1>
    <form action="/models" method="POST">
        @csrf
        <div class="mb-3">
            <label>Бренд:</label>
            <select name="brand_id" class="form-control" required>
                <option value="">— Выберите бренд --</option>
                @foreach($brands as $brand)
                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label>Название модели:</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Тип кузова:</label>
            <input type="text" name="body_type" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Год начала выпуска:</label>
            <input type="number" name="year_from" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Год окончания выпуска:</label>
            <input type="number" name="year_to" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Сохранить</button>
        <a href="/models" class="btn btn-secondary">Отмена</a>
    </form>
@endsection