@extends('layouts.app')

@section('title' , 'country')

@section('content')
    <div class="container" id="country_container">
    <h2 id="country">{{$id}}</h2>
        <div class="row" id="country_row">
@foreach ($trains as $train)
            <div class="col-12 p-2 text-white d-flex">
                <p class="col-6">
                    <span class="text-primary">Operated by: </span>
                    {{$train['company']}}
                </p>
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