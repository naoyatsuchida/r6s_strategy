<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Strategy extends Model
{
    public $guarded = [];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function comments(){
        return $this->hasMany('App\Models\Comment');
    }
    public function Map_paths(){
        return $this->hasMany('App\Models\Map_path');
    }


    public function operations()
    {
        return $this->belongsToMany('App\Models\Operation','strategy_operation','strategy_id','operation_id')->using('App\Models\Strategy_Operation');
    }
    //第一位引数にカラムのkeyを入力、第二引数に追加する値の配列を入力する
    public function array_collect($key,$array){
        $count = count($array);
        $array1 = [];
        $respons = [];
        for($i = 0; $i < $count; $i++){
            $array1[$key] = $array[$i];
            array_push($respons,$array1);
        }
        
        return $respons;
    }

    public function map_img($id){
        return \App\Models\Map_Category::where('id',$id)->first();
    }

}