@extends('layouts.app')

@section('title' , 'company')

@section('content')

@foreach ($trains as $train)
    
    <p class="text-white">{{$train['company']}}</p>
    {{-- <p class="text-white">{{$train['country']}}</p> --}}

@endforeach

@endsection