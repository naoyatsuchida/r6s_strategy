@extends('layouts.app')

@section('content')
<div class="download">

 
    <div class="download__content">
      <div class="download__content__name">
        <h5>作戦名：
          {{$strategy->name}}
        </h5>
        <h5>マップ名：
          {{$strategy->map_img($strategy->map_id)->name}}
        </h5>
      </div>

      @foreach($ope_come as $ope => $come)
        <div class="download__content__ope" id="operater{{$loop->iteration}}">
          <img src="{{asset($strategy->operation_color($ope)[0]->path)}}" alt="オペ画像"　class="download__content__ope__img">
          <div class="download__content__ope__come">
            <div class="ope">
              <p>{{$ope}}</p>
              <div id='operation__line{{$loop->iteration}}' class="line_color"></div>
            </div>
            <span  id="operater_color{{$loop->iteration}}" data-color="{{$strategy->operation_color($ope)[0]->color}}"></span>
            <div class="download__content__ope__come__comment">
              <p>{{$come}}</p>
            </div>
          </div>
        
        </div>
      
      @endforeach


      
      @foreach($strategy->Map_paths as $path)
      <img src="{{$path->map_path}}" alt="マップ画像" class="map_img" >
      @endforeach
      
      
</div class='download__bttom'>
    <a href="#" class="download__bttom__on btn-primary" id="download">ダウンロード</a>
    <a href="#" class="download__bttom__delete btn-danger">削除</a>
</div>
@endsection