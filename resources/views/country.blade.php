@extends('layouts.app')

@section('title' , 'country')

@section('content')
    <div class="container" id="country_container">
    <h2 id="country" class="text-white text-capitalize">{{$id}}</h2>
        <div class="row flex-column" id="country_row">
@foreach ($trains as $train)
            <div id="ticket_column" class="col-12 p-2 text-white d-flex border border-1 rounded-2 mt-2">
                <div class="col-6 d-flex flex-column">
                    <p class="col-12 text-primary">Operated by: <span class="text-white">{{$train['company']}}</span></p>
                    <p class="col-12 text-primary text-smal">
                        Departure: <span class="text-white">{{$train['departure_station']}}</span> <span class="text-success">|</span>
                        Arrival: <span class="text-white">{{$train['arrival_station']}}</span>
                    </p>
                </div>
                <div class="col-6 d-flex justify-content-evenly  text-center">
                    <div class="col-3 d-flex flex-column">
                        <p class="col-12">{{$train['departure_station']}}</p>
                        <p class="col-12">{{$train['departure_time']}}</p>
                    </div>
                    <div class="col-3 d-flex flex-column">
                        <p class="col-12">{{$train['arrival_station']}}</p>
                        <p class="col-12">{{$train['arrival_time']}}</p>
                    </div>
                </div>
            </div>
@endforeach
        </div>
    </div>
    

@endsection