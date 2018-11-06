<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Episode;

class EpisodeController extends Controller
{
    public function show($key_name, $season_number, $episode_number){
    	
    	$episode = Episode::join('seasons','seasons.id','episodes.season_id')
    				->select('episodes.*')
    				->join('series','series.id','seasons.serie_id')
    				->where('series.key_name',$key_name)
    				->where('seasons.number',$season_number)
    				->where('episodes.number',$episode_number)
    				->get()
    				->first();

    	return view('episodes.show',compact('episode'));
    }
}


