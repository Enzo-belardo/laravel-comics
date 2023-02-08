@extends('layouts.app')

@section('main-content')

@foreach ($comics as $element)
    <div class="card">
        <div class="image">
            <img src="{{ $element['thumb'] }}" alt="cover {{ $element['title'] }}">
        </div>

        <div class="description">
            <p class="fw-bold text-center">
                {{ $element['title'] }}
            </p>
        </div>
    </div>
@endforeach

    
@endsection