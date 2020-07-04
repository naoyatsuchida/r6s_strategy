@extends('layouts.app')
@section('content')


<div class="user">
  <div class="user__title">
      <h3>{{$user->name}}の作戦</h3>
  </div>

  <div class="user__contents">
    
    @foreach($strategies as $s)
      <div class="box">
        <img src="{{asset($s->map_img($s->map_id)->path)}}" alt="map_img">


        <div class="box__right">

            
            <span class="box__right__name">作戦名:{{$s->name}}</span>
            <ul>
              @if(isset($s->operations))
                @foreach($s->operations as $n)
                <li>
                  {{$n->name}}
                </li>
                @endforeach
              @else
              <p>オペレーターは選択されていません</p>
              @endif
            </ul>
          </div>
          <div class='link'>

            {{$s->created_at}}
            <p>
              <a href="{{route('strategy.edit',['id'=> $s->id])}}">詳細</a>
            </p>
          </div>
      </div>
    @endforeach
  </div>


</div>


@endsection
