<div class="show__said">
    <h4>攻撃</h4>
    <div class="show__said__attack">
        @foreach($OperationAttack as $attack)
            <div class="box" id="attack{{$loop->iteration}}" data-color="{{$attack->color}}">
                <img src="{{ asset($attack->path)}}" alt="オペレーター画像">
            </div>
        @endforeach
    </div>
    <h4>防衛</h4>
    <div class="show__said__defense">
        @foreach($OperationDefense as $defense)
            <div class="box" id="defense{{$loop->iteration}}"  data-color="{{$defense->color}}">
                <img src="{{ asset($defense->path)}}" alt="オペレーター画像">
            </div>
        @endforeach
    </div>

</div>