@extends('layouts.app')

@section('main-content')

<div class="jumbo">
  
</div>

<div class="container-card">
    @foreach ($comics as $element)
      <div class="product">
          <div class="cards">
              <img src="{{ $element['thumb'] }}" alt="cover {{ $element['title'] }}">
              <p class="text-center">
                  {{ $element['title'] }}
              </p>
          </div>
      </div>
    @endforeach
    <button>LOAD MORE</button>
  </div>

    
@endsection