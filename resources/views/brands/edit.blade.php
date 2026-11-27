@extends('layouts.app')
@section('content')
    <h1>Редактировать бренд: {{ $brand->name }}</h1>
    <form action="/brands/{{ $brand->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Название бренда:</label>
            <input type="text" name="name" class="form-control" value="{{ $brand->name }}" required>
        </div>
        <div class="mb-3">
            <label>Год основания:</label>
            <input type="number" name="create_year" class="form-control" value="{{ $brand->create_year }}" required>
        </div>
        <div class="mb-3">
            <label>Страна:</label>
            <select name="country_id" class="form-control" required>
                @foreach($countries as $country)
                    <!— Если ID страны совпадает с текущей страной бренда, делаем её выбранной -->
                    <option value="{{ $country->id }}" {{ $brand->country_id == $country->id ? 'selected' : '' }}>
                        {{ $country->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-warning">Обновить</button>
        <a href="/brands" class="btn btn-secondary">Отмена</a>
    </form>
@endsection

