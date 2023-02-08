<header>
    <div class="container d-flex justify-content-between align-items-center py-3">
       <div class="logo">
         <img src="{{ Vite::asset('resources/assets/img/dc-logo.png') }}" alt="Logo dc">
       </div>  

      <nav>
        <ul class="d-flex list-unstyled">
          @foreach ($links as $element)
            <li class="fw-bold"> {{ $element['link'] }} </li>
          @endforeach
        </ul>
      </nav>

      <div>
        <input class="search" type="search" name="" id="" placeholder="Search">
      </div>
   </div>
</header>