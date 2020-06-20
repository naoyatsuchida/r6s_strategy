@extends('layouts.app')

@section('content')
<body>
  <div class='strategy'>
    <h4>マップを選択してください</h4>
    <div class='strategy__maps'>
        @each('components.map',$maps, 'map')
    </div>
  </div>
</body>
@endsection
