<?php

namespace App\Http\Controllers;

use App\Models\Train;

class FetchTrains
{
    public static function countryFilter($id)
    {
        $trains = Train::select('*')->where('country', $id)->get();

        return $trains;
    }

    public static function companyFilter($id)//:array
    {
        $trains = Train::select('*')->where('company', $id)->get();

        return $trains;
    }

    public static function all()
    {
        $trains = Train::select('*')/*->limit(2)*/ ->get();

        return $trains;
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
        $trains = FetchTrains::all();
        $id = 'all trains';

        return view('alltrains', compact('trains', 'id'));
    }

    public function contacts()
    {
        return view('contacts');
    }

    public function countryFilter($id)
    {
        $trains = FetchTrains::countryFilter($id);

        //dd($trains);

        return view('country', compact('trains', 'id'));
    }

    public function companyFilter($id)
    {
        $trains = FetchTrains::companyFilter($id);

        //dd($trains);

        return view('company', compact('trains', 'id'));
    }
}

//Movie::where('vote', '<=' , 9)->orderBy('vote', 'desc')->limit(4)->get();
//return Movie::first(Film::all() , fn($movie) => $movie['original_title'] == $id);
