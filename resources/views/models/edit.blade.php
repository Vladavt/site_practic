@extends('layouts.app')
@section('content')
    <h1>Редактировать модель: {{ $model->name }}</h1>
    <form action="/models/{{ $model->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Бренд:</label>
            <select name="brand_id" class="form-control" required>
                @foreach($brands as $brand)
                    <option value="{{ $brand->id }}" {{ $model->brand_id == $brand->id ? 'selected' : '' }}>
                        {{ $brand->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label>Название модели:</label>
            <input type="text" name="name" class="form-control" value="{{ $model->name }}" required>
        </div>
        <div class="mb-3">
            <label>Тип кузова:</label>
            <input type="text" name="body_type" class="form-control" value="{{ $model->body_type }}" required>
        </div>
        <div class="mb-3">
            <label>Год начала выпуска:</label>
            <input type="number" name="year_from" class="form-control" value="{{ $model->year_from }}" required>
        </div>
        <div class="mb-3">
            <label>Год окончания выпуска:</label>
            <input type="number" name="year_to" class="form-control" value="{{ $model->year_to }}" required>
        </div>
        <button type="submit" class="btn btn-warning">Обновить</button>
        <a href="/models" class="btn btn-secondary">Отмена</a>
    </form>
@endsection