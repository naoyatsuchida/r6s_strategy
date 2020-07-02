@extends('layouts.app')
@section('content')


<div class="user">
  <div class="user__title">
      <h3>{{$user->name}}の作戦</h3>
  </div>
  <div class="user__contents">
    
    @foreach($strategies as $s)
      <div class="box">
        <p class="box__name">{{$s->name}}</p>
           {{ unserialize(html_entity_decode($s->comment))}}
        <a href="#">詳細</a>
      </div>
    @endforeach
  </div>


</div>


@endsection
