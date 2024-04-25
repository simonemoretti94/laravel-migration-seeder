<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

use Illuminate\Http\Request;

class FetchTrains {
    static function country()//:array
    {
        //return Train::where('country')->get();
        return Train::select('country')->get();
    }

    static function company()//:array
    {
        return Train::where('company')->get();
    }
}

class PageController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function alltrains()
    {
        return view('alltrains');
    }

    public function company()
    {

        $trains = FetchTrains::company();
        dd($trains);

        return view('company' , compact('trains'));
    }

    public function country()
    {

        $trains = FetchTrains::country();
        dd($trains);

        return view('country' , compact('trains'));
    }

    public function contacts()
    {
        return view('contacts');
    }
}

//Movie::where('vote', '<=' , 9)->orderBy('vote', 'desc')->limit(4)->get();
//return Movie::first(Film::all() , fn($movie) => $movie['original_title'] == $id);