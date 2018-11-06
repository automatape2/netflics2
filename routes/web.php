<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'IndexController@index')->name('index');

Route::get('{serie_name}','SerieController@index')
	->name('series.show');

Route::get('{serie_name}/seasons',function($serie_name){
	$episode_number = 1;
    return redirect()->route('seasons.index',[$serie_name,$episode_number]);
});

Route::get('{serie_name}/seasons/{season_number}','SeasonController@show')
	->name('seasons.show');

Route::get('{serie_name}/seasons/{season_number}/episodes/{episode}','EpisodeController@show')
	->name('episodes.show');

Route::get('movies/{movie_id}','MovieController@show')
	->name('movie.show');

