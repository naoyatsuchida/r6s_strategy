@extends('layouts.app')
@section('content')


インデックス です<br>
<a href="{{route('user.show',['id'=> $id ])}}">マイページ</a>


@endsection