@extends('layouts.app')

@section('content')
<div>
  @foreach($maps as $map)
  <img src="{{asset($map->path)}}" alt="各マップの画像">
  @endforeach
</div>
@endsection
