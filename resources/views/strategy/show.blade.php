@extends('layouts.app')


@section('content')
<div class='show'>
  <div class="show__img">
    @foreach($maps as $map)
    
    
    <div class="show__img__map" id="canvas_container">
        <form action="#" >
          <input type="hidden" id='pass{{$loop->iteration}}' value="{{asset($map->path)}}" class="img_pass">
          <input type="hidden" id='count' value="{{$loop->count}}" class="img_pass">
        </form>
        <canvas id='CanvasMap{{$loop->iteration}}' ></canvas>
        <canvas id="CanvasDraw{{$loop->iteration}}"></canvas>
        <div>
          <button id="clear-button{{$loop->iteration}}">戻る</button>
          <button id="clear-button{{$loop->iteration}}">進む</button>
        </div>
 
      </div>
    @endforeach
  </div>
  @include('components.said',['title'=>'サイドバー'])
</div>
  
@endsection

