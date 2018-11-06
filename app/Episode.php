<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    public function season(){
    	return $this->belongsTo('App\Season');
    }

    public function previous_episode_name(){
    	$episode_name = Episode::join('seasons','seasons.id','episodes.season_id')
    				->select('episodes.*')
    				->join('series','series.id','seasons.serie_id')
    				->where('series.key_name',$this->season->serie->key_name)
    				->where('seasons.number',$this->season->number)
    				->where('episodes.number',$this->number - 1)
    				->get()
    				->first()
    				->name;
    				return $episode_name;
    }	

    public function next_episode_name(){
		$episode_name = Episode::join('seasons','seasons.id','episodes.season_id')
    				->select('episodes.*')
    				->join('series','series.id','seasons.serie_id')
    				->where('series.key_name',$this->season->serie->key_name)
    				->where('seasons.number',$this->season->number)
    				->where('episodes.number',$this->number + 1)
    				->get()
    				->first()
    				->name;
    	return $episode_name;
    }

    public function first_episode_name_of_next_season(){
    	$episode_name = Episode::join('seasons','seasons.id','episodes.season_id')
    				->select('episodes.*')
    				->join('series','series.id','seasons.serie_id')
    				->where('series.key_name',$this->season->serie->key_name)
    				->where('seasons.number',$this->season->number + 1)
    				->where('episodes.number',1)
    				->get()
    				->first()
    				->name;
    				
    	return $episode_name;
    }
}
