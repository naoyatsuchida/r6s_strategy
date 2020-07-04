@extends('layouts.app')
@section('content')


<div class="user">
  <div class="user__title">
      <h3>{{$user->name}}の作戦</h3>
  </div>
  <div class="user__contents">
    
    @foreach($strategies as $s)
      <div class="box">
        <p>{{$s->map_img($s->map_id)->name}}</p>
        <img src="{{asset($s->map_img($s->map_id)->path)}}" alt="map_img">

        <p class="box__name">作戦名:{{$s->name}}</p>
        <ul>
          @foreach($s->operations as $n)
          <li>
          {{$n->name}}
          </li>
          @endforeach
        </ul>
        <a href="{{route('strategy.edit',['id'=> $s->id])}}">詳細</a>
      </div>
    @endforeach
  </div>


</div>


@endsection
