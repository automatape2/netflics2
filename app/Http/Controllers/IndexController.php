<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Serie;
use App\Movie;

class IndexController extends Controller
{
    public function index(Request $request){

    	$series = Serie::get();

    	$movies = Movie::get();

    	return view('index',compact('series','movies'));
    }
}
