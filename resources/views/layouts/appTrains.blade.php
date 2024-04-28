<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="icon" type="images/x-icon" href="{{Vite::asset('resources/img/favicon_all.svg')}}" />

        <title>@yield('title' , 'app')</title>
        
        {{-- tailwind for pagination --}}
        {{-- <script src="https://cdn.tailwindcss.com"></script> --}}

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />


       @vite(['resources/css/app.css' , 'resources/js/app.js'])
    </head>
    <body>
    <header>
    @include('components.header')
    </header>
    <main class="py-2">

    {{-- Shared structure --}}
    <div class="container" id="country_container">
        <h2 id="country" class="text-white text-capitalize">{{$id}}</h2>
        <div class="row flex-column" id="country_row">

        @foreach ($trains as $train)

        @if (!$train['on_schedule'])  
            <h6 class="mt-2 text-white pt-1" style="border-top: solid 1px white; width: auto;">Not on schedule</h6>
        @endif

            <div id="train_info_column" class="col-12 p-2 text-white d-flex border border-1 rounded-2  {{$train['on_schedule'] ? 'bg_on_schedule mt-2' : 'bg_not_on_schedule'}}">

            {{-- open train info left side --}}
                <div id="train_info_left" class="col-6 d-flex flex-column">
                    <p class="col-12 text-primary">Operated by: <span class="text-white">{{$train['company']}}</span></p>
                    <p id="train_departure_arrival" class="col-12 text-primary text-smal">
                        Departure: <span class="text-white">{{$train['departure_station']}}</span> <span class="text-success">|</span>
                        Arrival: <span class="text-white">{{$train['arrival_station']}}</span>
                    </p>
                </div>
            {{-- close train info left side --}}
            
            {{-- open train info right side --}}
                <div id="train_info_right" class="col-6 row justify-content-evenly  text-center">
                    <div class="col d-flex flex-column">
                        <p class="col-12"><span id="span_departure_arrival" class="text-primary">Departure: </span>{{$train['departure_station']}}</p>
                        <p class="col-12">{{$train['departure_time']}}</p>
                    </div>
                    <div class="col d-flex flex-column">
                        <p class="col-12"><span id="span_departure_arrival" class="text-primary">Arrival: </span>{{$train['arrival_station']}}</p>
                        <p class="col-12">{{$train['arrival_time']}}</p>
                    </div>
                </div>
            {{-- close train info right side --}}

            </div>
        @endforeach

        </div>
        {{-- <div class="container mt-2">
            <div class="row justify-content-center">
                {{ $trains->links() }} disabled cause produces troubles with bootstrap's classes
            </div>
        </div> --}}
    </div>
    {{-- Shared structure --}}

    </main>
    <footer>
    @include('components.footer')
    </footer>
    </body>
</html>
