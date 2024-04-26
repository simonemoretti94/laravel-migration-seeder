@extends('layouts.app')

@section('title' , 'contacts')

@section('content')
<div class="container text-white">
    <h1 class=" text-center text-primary">Contact Us</h1>
    <h6 class="text-primary">Feedback and Contact</h6>
    <p>
    Have you received exceptional service from one of our staff members? Do you have suggestions on how we can further improve our service? We value both positive feedback and constructive criticism.
    </p>

    <h6 class="text-primary">
    How to Reach Us:
    </h6>

    <p class="mt-2">
    <span class="text-success">
    Phone: 
    </span>
    You can call us at 03153 0947 036232. Our Contact Centre team is available Monday to Friday, from 09:00 to 17:00.
    </p>
    <p class="mt-1">
    <span class="text-success">
    Email:  
    </span>
    Share your feedback via email at <a href="{{route('home')}}">simone.moretti.944@gmail.com</a>.
    </p>
    <p class="mt-1">
    <span class="text-success">
    Online Form: 
    </span>
    Fill out our online feedback form by clicking the button below.
    Provide Feedback
    </p>

    <h4 class="text-primary">Address:</h4>

    <p>
    Simone Moretti
    1st Floor, Premier House
    Argyle Way
    Stevenage, Hertfordshire
    SG1 2AD

    We hope our customers find this information helpful for sharing their experiences and suggestions with us. Thank you for your request! 🚂📞📧
    </p>
</div>
@endsection