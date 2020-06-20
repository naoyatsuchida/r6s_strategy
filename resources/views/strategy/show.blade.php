@extends('layouts.app')


@section('content')
<div class='show'>
  <div class="show__img">
    @foreach($maps as $map)
    
      <form action="#" id="form1">
        <input type="hidden" id='h' value="{{asset($map->path)}}">
      </form>
      
      <div class="show__img__map" id="canvas_container">
        <canvas id='CanvasMap' >
  
          <!-- <img src="{{asset($map->path)}}" alt="各マップの画像" width="100%" height="800"> -->
        </canvas>

      </div>
    @endforeach
  </div>
  @include('components.said',['title'=>'サイドバー'])
</div>
  
@endsection

