<div class="show__said">
    <h4>攻撃</h4>
    <div class="show__said__attack">
        @foreach($OperationAttack as $attack)
            <div class="box" data-color="{{$attack->color}}">
                <img src="{{ asset($attack->path)}}" alt="オペレーター画像">
            </div>
        @endforeach
    </div>
    <h4>防衛</h4>
    <div class="show__said__defense">
        @foreach($OperationDefense as $defense)
            <div class="box" data-color="{{$defense->color}}">
                <img src="{{ asset($defense->path)}}" alt="オペレーター画像">
            </div>
        @endforeach
    </div>

</div>