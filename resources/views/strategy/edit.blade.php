@extends('layouts.app')

@section('content')
ダウンロードページ
{{$strategy->name}}
{{$strategy->map_img($strategy->map_id)->name}}

@foreach($strategy->Map_paths as $path)
<img src="{{$path->map_path}}" alt="マップ画像" >
@endforeach


@endsection