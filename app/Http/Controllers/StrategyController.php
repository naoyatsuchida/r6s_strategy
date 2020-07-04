<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \App\Models\Map_Category;
use \App\Models\Operation;
use Illuminate\Support\Facades\DB;
use \App\Models\Strategy;
use \App\User;

class StrategyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $maps = Map_Category::get()->toTree();
   
        return view('strategy.index',compact('maps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('strategy.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        //先にstrategyのインスタンスを作成しないと整合性が取れてないと怒られる。


        $strategy = Strategy::create(['name' => $request->input('name'),
                                        'user_id' => Auth::id(),
                                        'map_id' => $request->input('map_id')]);
        $a = $strategy->array_collect('map_path',$request->input('map_path'));
        $b = $strategy->array_collect('comment',$request->input('comments'));
        $strategy->Map_paths()->createMany($a);
        $strategy->comments()->createMany($b);
        $strategy->operations()->attach($request->input('operation_id'));
        $strategy->save();

        //マイページに遷移させるために必要なデータ達
        $strategies = User::find(Auth::id())->strategies()->orderBy('created_at','desc')->get();
        $user = User::find(Auth::id());
        return view('user.show',compact('strategies','user'));


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $map_id = $id;
        $maps = Map_Category::descendantsOf($id);
        
        $OperationAttack = Operation::OperationAttack();
        $OperationDefense = Operation::OperationDefense();
        $attackpath = Operation::where('role','attack')->get();
        $defensepath = Operation::where('role','defense')->get();
        return view('strategy.show',compact('maps','OperationAttack','OperationDefense','attackpath','defensepath','map_id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $strategy = Strategy::find($id);
        return view('strategy.edit',compact('strategy'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
