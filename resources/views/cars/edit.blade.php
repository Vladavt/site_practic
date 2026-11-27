@extends('layouts.app')
@section('content')
    <h1>Редактировать машину ({{ $car->pasport }})</h1>
    <form action="/cars/{{ $car->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Паспорт:</label>
            <input type="text" name="pasport" class="form-control" value="{{ $car->pasport }}" required>
        </div>
        <div class="mb-3">
            <label>Год выпуска:</label>
            <input type="number" name="year" class="form-control" value="{{ $car->year }}" required>
        </div>
        <div class="mb-3">
            <label>Цена:</label>
            <input type="text" name="price" class="form-control" value="{{ $car->price }}" required>
        </div>
        <div class="mb-3">
            <label>Пробег:</label>
            <input type="number" name="mileage" class="form-control" value="{{ $car->mileage }}" required>
        </div>
        <div class="mb-3">
            <label>Статус:</label>
            <input type="text" name="status" class="form-control" value="{{ $car->status }}" required>
        </div>
        
        <div class="mb-3">
            <label>Модель:</label>
            <select name="model_id" class="form-control" required>
                @foreach($models as $model)
                    <option value="{{ $model->id }}" {{ $car->model_id == $model->id ? 'selected' : '' }}>
                        {{ $model->brand->name }} {{ $model->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label>Цвет:</label>
            <select name="color_id" class="form-control" required>
                @foreach($colors as $color)
                    <option value="{{ $color->id }}" {{ $car->color_id == $color->id ? 'selected' : '' }}>
                        {{ $color->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label>Коробка передач:</label>
            <select name="transmission_id" class="form-control" required>
                @foreach($transmissions as $transmission)
                    <option value="{{ $transmission->id }}" {{ $car->transmission_id == $transmission->id ? 'selected' : '' }}>
                        {{ $transmission->name }}
                    </option>
                @endforeach
            </select>
        </div>
        
        <button type="submit" class="btn btn-warning">Обновить</button>
        <a href="/cars" class="btn btn-secondary">Отмена</a>
    </form>
@endsection