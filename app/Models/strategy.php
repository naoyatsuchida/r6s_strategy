<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Strategy extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function map(){
        return $this->belongsTo('App\Models\Map_Category');
    }

    public function operations()
    {
        return $this->belongsToMany('App\Models\Operation','strategy_operation','strategy_id','operation_id')->using('App\Models\Strategy_Operation');
    }
}
