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
        dd(Train::all());
        return view('index');
    }
}