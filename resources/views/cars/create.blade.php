@extends('layouts.app')
@section('content')
    <h1>Добавить машину</h1>
    <form action="/cars" method="POST">
        @csrf
        <div class="mb-3">
            <label>Паспорт:</label>
            <input type="text" name="pasport" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Год выпуска:</label>
            <input type="number" name="year" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Цена:</label>
            <input type="text" name="price" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Пробег:</label>
            <input type="number" name="mileage" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Статус:</label>
            <input type="text" name="status" class="form-control" required>
        </div>
        
        <div class="mb-3">
            <label>Модель:</label>
            <select name="model_id" class="form-control" required>
                <option value="">— Выберите модель --</option>
                @foreach($models as $model)
                    <option value="{{ $model->id }}">{{ $model->brand->name }} {{ $model->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label>Цвет:</label>
            <select name="color_id" class="form-control" required>
                <option value="">— Выберите цвет --</option>
                @foreach($colors as $color)
                    <option value="{{ $color->id }}">{{ $color->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label>Коробка передач:</label>
            <select name="transmission_id" class="form-control" required>
                <option value="">— Выберите коробку --</option>
                @foreach($transmissions as $transmission)
                    <option value="{{ $transmission->id }}">{{ $transmission->name }}</option>
                @endforeach
            </select>
        </div>
        
        <button type="submit" class="btn btn-success">Сохранить</button>
        <a href="/cars" class="btn btn-secondary">Отмена</a>
    </form>
@endsection