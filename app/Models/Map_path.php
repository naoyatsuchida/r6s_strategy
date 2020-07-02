<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Map_path extends Model
{
    protected $fillable = ['map_path'];

    public function strategies(){
        return $this->belongsTo('App\Models\strategy');
    }
}
