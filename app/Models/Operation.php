<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{
    public function strategy()
    {
        return $this->belongsToMany('App\Models\strategy','strategy_operation','operation_id','strategy_id')->using('App\Models\Strategy_Operation');
    }
}
