@extends('layouts.app')

@section('content')
<div class="download">

 
    <div class="download__content">
      <div class="canvas_download">

        <div class="download__content__name">
          <h5>作戦名：
            {{$strategy->name}}
          </h5>
          <h5>マップ名：
            {{$strategy->map_img($strategy->map_id)->name}}
          </h5>
        </div>
        
        @if(isset($ope_come))
        
        @foreach($ope_come as $ope => $come)
        <div class="download__content__ope" id="operater{{$loop->iteration}}">
          <img src="{{asset($strategy->operation_color($ope)[0]->path)}}" alt="オペ画像"　class="download__content__ope__img">
          <div class="download__content__ope__come">
            <div class="ope">
              <p>{{$ope}}</p>
              <span id='operation__line{{$loop->iteration}}' class="line_color"  data-color="{{$strategy->operation_color($ope)[0]->color}}"></span>
            </div>
            <div class="download__content__ope__come__comment">
              @if(isset($come))
              <p>{{$come}}</p>
              @else
              <p>入力がありません</p>
              @endif
            </div>
          </div>
          
        </div>
        
        @endforeach
        @endif
      </div>
        
        
              <!-- canvas化する画像 -->
              @foreach($strategy->Map_paths as $path)
              <div class="canvas_download">   
                <img src="{{$path->map_path}}" alt="マップ画像" class="map_img" >
              </div>
              @endforeach
              
              
      
              <div href="#" class="download__bttom__on btn-primary" id="download">ダウンロード</div>
              <form id='delete_btton' action="{{route('strategy.destroy',['id'=> $strategy->id])}}" method="post">
                @csrf
                <button id="del" class="download__bttom__delete btn-danger" data-id="{{$strategy->id}}">削除</button>
              </form>
    </div>
@endsection
