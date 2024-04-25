<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

use Illuminate\Http\Request;

class FetchTrains {

    static function countryFilter($id)
    {
        $trains = Train::select('*')->where('country', $id)->get();
        return $trains;
    }

    static function company()//:array
    {
        return Train::select('*')->where('company', 'trenord')->get();
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

    public function contacts()
    {
        return view('contacts');
    }

    public function countryFilter($id)
    {
        $trains = FetchTrains::countryFilter($id);

        //dd($trains);
        return view('country' , compact('trains'));
    }
}

//Movie::where('vote', '<=' , 9)->orderBy('vote', 'desc')->limit(4)->get();
//return Movie::first(Film::all() , fn($movie) => $movie['original_title'] == $id);