@extends('layouts.app')


@section('content')
<div class='show'>
  <div class="show__img">
    @foreach($maps as $map)
      <div id='CanvasMap' class="show__img__map">
        <img src="{{asset($map->path)}}" alt="各マップの画像" width="100%" height="800">
      </div>
    @endforeach
  </div>
  @include('components.said',['title'=>'サイドバー'])
</div>
  
@endsection

