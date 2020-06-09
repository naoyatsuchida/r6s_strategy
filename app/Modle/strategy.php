<?php

namespace App\Modle;

use Illuminate\Database\Eloquent\Model;

class Strategy extends Model
{
    public function users(){
        return $this->belongsTo('App\User');
    }
}
