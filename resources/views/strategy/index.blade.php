@extends('layouts.app')

@section('content')


インデックス です<br>
@if($user_ok)
  <a href="{{route('user.show',['id'=> $id ])}}">マイページ</a>

@endif

@endsection