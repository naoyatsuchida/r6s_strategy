<div class="show__said">
    <h4>攻撃</h4>
    <div class="show__said__attack">
        @foreach($attackpath as $attack)
            <div class="box"  >
                <img src="{{ asset($attack->path)}}" alt="オペレーター画像" data-color="{{$attack->color}}">
            </div>
        @endforeach
    </div>
    <h4>防衛</h4>
    <div class="show__said__defense">
        @foreach($defensepath as $defense)
            <div class="box"   >
                <img src="{{ asset($defense->path)}}" alt="オペレーター画像" data-color="{{$defense->color}}">
            </div>
        @endforeach
    </div>

</div>