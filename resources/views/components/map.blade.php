
<div class="strategy__maps__img">
    <span class="map_name">{{$map['name']}}</span>
    <a href="{{route('strategy.show',['id'=> $map['id']])}}">
        <img src="{{asset($map['path'])}}" alt="マップ画像">
    </a>
</div>
