<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SerieController extends Controller
{
    public function index($serie_name){
    	
    	$episode_number = 1;
    	return redirect()->route('seasons.show',[$serie_name,$episode_number]);
    }
}
