@extends('welcome')
@section('title', 'Page Title')
@section('content')
    <div class="col-lg-3">
          <h1 class="my-4">{{$serie->name}}</h1>
          <div class="list-group">
              @foreach($serie->seasons as $season)
                <a href="#" class="list-group-item">Temporada {{$season->number}}</a>
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

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="https://www.exitoysuperacionpersonal.com/wp-content/uploads/2018/01/Frases-del-Dr-House.jpg" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Capítulo [EpisodeNumber]</a>
                  </h4>
                  <h5>[EpisodeTitle]</h5>
                  <p class="card-text">EpisodeDescription</p>
                </div>
                <!-- <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div> -->
              </div>
            </div>

           

          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->
@endsection