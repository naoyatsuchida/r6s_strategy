<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['comment'];
    public function strategies(){
        return $this->belongsTo('App\Models\strategy');
    }
}
