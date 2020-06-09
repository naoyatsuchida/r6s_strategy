<?php

namespace App\Modle;

use Illuminate\Database\Eloquent\Model;

class strategy extends Model
{
    public function users(){
        return $this->belongsTo('App\User');
    }
}
