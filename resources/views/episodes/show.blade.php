@extends('episode_template')
@section('title', 'Cap '.$episode->number.': '.$episode->name.' | Temporada '.$episode->season->number.' '.$episode->season->serie->name)
@section('content')

  <div class="col-sm-2">

    <div style="display: table;height: 100%">
      
      <a style="width: 100%;color:white;font-size: 44px;top: 20px;position: fixed" href="{{route('seasons.show',[$episode->season->serie->key_name,$episode->season->number])}}"> 
      <i class="fa fa-arrow-alt-circle-left" aria-hidden="true"></i> 
      T{{$episode->season->number}}</a>
      
      <div style="display: table-cell;vertical-align: middle">
        <p style="color:white;margin-bottom: 0px!important">
          <small>{{$episode->season->serie->name}} T{{$episode->season->number}}</small>
          <br>
          Cap {{$episode->number}}:
        </p>
        <h3 style="color:white;text-transform: uppercase">{{$episode->name}}</h3>
        <p style="color:white">{{$episode->description}}</p>
        <div class="text-center">
          @if($episode->number != 1)
            <a 
              data-toggle="tooltip"
              data-placement="bottom"
              title="Cap {{$episode->number - 1}}: {{$episode->previous_episode_name()}}"
            href="{{route('episodes.show',[$episode->season->serie->key_name,$episode->season->number,$episode->number - 1])}}" class="btn btn-primary" style="color: white"> << C{{$episode->number-1}}</a>
          @endif

          @if($episode->is_last == 0)
            <a 
              data-toggle="tooltip"
              data-placement="bottom"
              title="Cap {{$episode->number + 1}}: {{$episode->next_episode_name()}}"
              href="{{route('episodes.show',[$episode->season->serie->key_name,$episode->season->number,$episode->number + 1])}}"  class="btn btn-success"> C{{$episode->number+1}} >></a>
          @else
            <a 
              data-toggle="tooltip"
              data-placement="bottom"
              title="T{{$episode->season->number + 1}} Cap 1: {{$episode->first_episode_name_of_next_season()}}"
            href="{{route('episodes.show',[$episode->season->serie->key_name,$episode->season->number + 1 ,1])}}"  class="btn btn-success"> T{{$episode->season->number + 1}} C1 >></a>
          @endif
        </div>
      </div>
    </div>  
  </div>
  <div class="col-sm-10">
    <video id="player" autoplay controls name="media" class="text-center" height="100%" width="100%">
      <source src="{{$episode->video_link}}" type="video/mp4">
    </video>  
  </div>
@endsection
@section('scripts')
  <script>
    $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip()
    });
    $("#player").on('ended', function(){
      var is_last = {!! $episode->is_last !!};
      if(is_last == 0){
        window.location.href = "{{route('episodes.show',[$episode->season->serie->key_name,$episode->season->number,$episode->number + 1])}}";
      }else{
        window.location.href = "{{route('episodes.show',[$episode->season->serie->key_name,$episode->season->number + 1 ,1])}}";
      }
      
    });
  </script>
@endsection
