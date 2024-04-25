<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        //dd(Train::all());
        return view('index');
    }

    public function alltrains()
    {
        return view('alltrains');
    }

    public function company()
    {
        return view('company');
    }

    public function country()
    {
        return view('country');
    }

    public function contacts()
    {
        return view('contacts');
    }
}

//Movie::where('vote', '<=' , 9)->orderBy('vote', 'desc')->limit(4)->get();
//return Movie::first(Film::all() , fn($movie) => $movie['original_title'] == $id);