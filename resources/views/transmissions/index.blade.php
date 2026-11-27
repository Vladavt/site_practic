@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Коробки передач</h1>
        <a href="/transmissions/create" class="btn btn-success">+ Добавить</a>
    </div>

    <div class="row">
        @foreach($transmissions as $transmission)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5>{{ $transmission->name }}</h5>
                        <p>Тип: {{ $transmission->type }}</p>
                        
                        <div class="d-flex gap-2">
                            <a href="/transmissions/{{ $transmission->id }}" class="btn btn-primary btn-sm">Смотреть</a>
                            <a href="/transmissions/{{ $transmission->id }}/edit" class="btn btn-warning btn-sm">Ред.</a>
                            
                            <form action="/transmissions/{{ $transmission->id }}" method="POST" onsubmit="return confirm('Удалить?')">
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