<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Season;

class SeasonController extends Controller
{
    public function show($key_name, $season_number){
        
    	$season = Season::join('series','series.id','seasons.serie_id')
    				->select('seasons.*')
    				->with('episodes')
    				->where('seasons.number',$season_number)
    				->where('series.key_name',$key_name)
    				->get()
    				->first();
    				
		$episodes = $season->episodes;

    	return view('seasons.show',compact('season','episodes'));
    }
}
