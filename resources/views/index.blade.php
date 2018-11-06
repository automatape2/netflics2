@extends('welcome')
@section('title', 'Netflics')
@section('content')	
	<div class="col-sm-12">
		<h1>Series y películas online</h1>		
	</div>
	<div class="col-sm-6">
		<h2>Series</h2>
		<div class="col-sm-12 row">
			@foreach($series as $serie)

			<div class="col-sm-6">
				<div class="bd-example">
					<div class="card">
						<a href="{{route('series.show',$serie->key_name)}}">
							<img class="card-img-top" src="{{$serie->img_link}}" style="height: 180px; width: 100%; display: block;">		
						</a>
					  <div class="card-body">
					  	<a href="{{route('series.show',$serie->key_name)}}" class="btn bnt-link"><h4>{{$serie->name}}</h4></a>
					  	<div class="col-sm-12">
					  		<p class="card-text">
						    	{{$serie->description}}
						    </p>	
					  	</div>
					  </div>
					</div>
				</div>	
			</div>
			@endforeach
		</div>
	</div>
	<div class="col-sm-6">
		<h2>Películas</h2>
		<div class="col-sm-12 row">
			@foreach($movies as $movie)
			<div class="col-sm-6">
				<div class="bd-example">
					<div class="card">
						<a href="{{route('movie.show',$movie->id)}}">
							<img class="card-img-top" src="{{$movie->img}}" style="height: 180px; width: 100%; display: block;">		
						</a>
						<div class="card-body">
							<a href="{{route('movie.show',$movie->id)}}" class="btn btn-link">
								<h4>{{$movie->name}}</h4>	
							</a>
							<div class="col-sm-12">
								<p class="card-text">
									{{$movie->description}}
								</p>	
							</div>
							
						</div>
					</div>
				</div>	
			</div>
			@endforeach
		</div>
	</div>
@endsection