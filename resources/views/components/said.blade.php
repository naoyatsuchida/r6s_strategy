<div class="show__said">
    <button class="btn-danger" id="attack">攻撃</button>
    or
    <button class="btn-primary" id="defense">防衛</button>
   
    <div class="show__said__attack" style="display: none;">
        @foreach($attackpath as $attack)
            <div class="box" id="attacop" >
                <img src="{{ asset($attack->path)}}" alt="オペレーター画像" data-color="{{$attack->color}}">
            </div>
        @endforeach
    </div>

    <div class="show__said__defense" style="display: none;">
        @foreach($defensepath as $defense)
            <div class="box" id="defenseop">
                <img src="{{ asset($defense->path)}}" alt="オペレーター画像" data-color="{{$defense->color}}">
            </div>
        @endforeach
    </div>

</div>