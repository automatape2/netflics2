<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    public function show($movie_id){
    	$movie = Movie::findOrFail($movie_id);

    	return view('movies.show',compact('movie'));
    }
}
