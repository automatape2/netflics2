@extends('movie_template')
@section('title', $movie->title)
@section('content')
  <div class="col-sm-12">
    <video id="player" autoplay controls name="media" class="text-center" height="100%" width="100%">
      <source src="{{$movie->video_link}}" type="video/mp4">
    </video>  
  </div>
@endsection