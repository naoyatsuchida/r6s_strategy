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

    //オペレーターそれぞれのコメントを連想配列の形に保存
    public function operation_comment($strategy){
        $ope = $strategy->operations;
        $come = $strategy->comments;
        $array1 = [];
        $array2 = [];
        
        for($i = 0; $i < count($ope); $i++){
                $name = $ope[$i]->name;
                array_push($array1,$name);
        }

        for($i = 0; $i< count($come); $i++){
                $coment = $come[$i]->comment;
                array_push($array2,$coment);
        }
        return array_combine($array1,$array2);
    }

    public function operation_color($name){
        $color = \App\Models\Operation::where('name',$name)->select('color','path')->get();
        
        return $color;
    }
    

    public function map_img($id){
        return \App\Models\Map_Category::where('id',$id)->first();
    }

}