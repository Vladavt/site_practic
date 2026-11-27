@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Бренды</h1>
        <a href="/brands/create" class="btn btn-success">+ Добавить бренд</a>
    </div>

    <div class="row">
        @foreach($brands as $brand)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5>{{ $brand->name }}</h5>
                        <p>Страна: {{ $brand->country->name }}</p>
                        <p>Год основания: {{ $brand->create_year }}</p>
                        
                        <div class="d-flex gap-2">
                            <a href="/brands/{{ $brand->id }}" class="btn btn-primary btn-sm">Смотреть</a>
                            <a href="/brands/{{ $brand->id }}/edit" class="btn btn-warning btn-sm">Ред.</a>
                            
                            <form action="/brands/{{ $brand->id }}" method="POST" onsubmit="return confirm('Удалить бренд?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Удалить</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection