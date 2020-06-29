<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \App\Models\Map_Category;
use \App\Models\Operation;
use Illuminate\Support\Facades\DB;
use \App\Models\Strategy;

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
   
        $strategy = new Strategy;
        // $strategy->name = $request->input('name');
        // $strategy->map_url = $request->input('strategies.*.map_url');
        // $strategy->operation = operations()->attach($request->input('strategies.*.operation_ids'));
        // $strategy->comment = $request->input('strategies.*.comments');
        $strategy = $request->all();
        $strategy['user_id'] = Auth::id();
        dd($strategy);
   
  

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $maps = Map_Category::descendantsOf($id);
        $OperationAttack = Operation::OperationAttack();
        $OperationDefense = Operation::OperationDefense();
        $attackpath = Operation::where('role','attack')->get();
        $defensepath = Operation::where('role','defense')->get();
        return view('strategy.show',compact('maps','OperationAttack','OperationDefense','attackpath','defensepath'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
