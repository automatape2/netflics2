@extends('welcome')
@section('title', $season->serie->name)
@section('content')
<div class="col-lg-3">
  <h1 class="my-4">{{$season->serie->name}}</h1>
  <div class="list-group">
      @foreach($season->serie->seasons as $sea)
        <a href="{{route('seasons.show',[$season->serie->key_name,$sea->number])}}" class="list-group-item 
          @if($season->number == $sea->number) active @endif">Temporada {{$sea->number}}</a>
      @endforeach
  </div>
</div>
<div class="col-lg-9">
  <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="row">
  	  @foreach($episodes as $episode)
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
          <a href="{{route('episodes.show',[$season->serie->key_name,$season->number,$episode->number])}}"><img class="card-img-top" src="https://www.exitoysuperacionpersonal.com/wp-content/uploads/2018/01/Frases-del-Dr-House.jpg" alt=""></a>
          <!-- src="{{$episode->image_link}}" -->
          
          <div class="card-body">
            <h4 class="card-title">
              <a href="{{route('episodes.show',[$season->serie->key_name,$season->number,$episode->number])}}">Episodio {{$episode->number}}</a>
            </h4>
            <h5>{{$episode->name}}</h5>
            <p class="card-text">{{$episode->description}}</p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
</div>
@endsection