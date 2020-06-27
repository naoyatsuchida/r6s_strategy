<div class="form_box">

    {{ Form::open(['url'=> "route('strategy.store')", 'method' => 'post']) }}
    <!-- 一つ目のフォーム -->
    <div class="operater_forms" id="first_form" >
        <!-- ユーザーとマップurlをhiddenで入力 -->
        {{Form::hidden('map_url[]','null',['id' => 'map_url'])}}
        {{Form::hidden('user_id','Auth::id()',['id' => 'map_url'])}}
        <!-- ユーザーとマップurlをhiddenで入力 -->
        {{Form::label('','タイトル：')}}
        {{Form::text('name', '', ['placeholder' => '作戦名','id' => 'strategy_name', 'size' => 20])}}
        <br>


        {{Form::select('', [0 => '攻撃',1 =>'防衛'], '', ['placeholder' => '攻撃か防衛か選択してください','id' => 'select_role'])}}
        <span class="select_form" style="display: none;">
            NO1:{{Form::select('operation_ids[]', [$OperationAttack->pluck('name')], '', ['placeholder' => '攻撃オペレーター','class' => 'select_attack'])}}
            {{Form::select('operation_ids[]', [$OperationDefense->pluck('name')], '', ['placeholder' => '防衛オペレーター','class' => 'select_defense'])}}
        </span>
        <br>
        {{Form::textarea('comments[]', '', ['placeholder' => '選択オペレーターの役割','class' => 'operater_comment'])}}
        <div class="form_box__btn btn-primary" id="next1">next</div>
    </div>
    <!-- 二つ目のフォーム以降繰り返し -->
    @for($i = 2;$i < 6; $i++)
    <div class="operater_forms" id="form{{$i}}" style="display: none;">
        
        <span class="select_form" style="display: none;">NO{{$i}}:
            {{Form::select('operation_ids[]', [$OperationAttack->pluck('name')], '', ['placeholder' => '攻撃オペレーター','class' => 'select_attack'])}}
            {{Form::select('operation_ids[]', [$OperationDefense->pluck('name')], '', ['placeholder' => '防衛オペレーター','class' => 'select_defense'])}}
        </span>
        <br>
        {{Form::textarea('comments[]', '', ['placeholder' => '選択オペレーターの役割','class' => 'operater_comment'])}}
        <div class="form_box__btn btn-primary" id="next{{$i}}">next</div>
    </div>
    @endfor

    {{Form::submit('更新', ['name' => 'update', 'class' => 'btn btn-primary', 'onfocus' => 'this.blur();'])}}
    {{ Form::close() }}
</div>
    
    