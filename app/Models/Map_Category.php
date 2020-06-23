<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;
class Map_Category extends Model
{
    use NodeTrait;
    public function strategies()
    {
        return $this->hasMany('App\Models\strategy');
    }
}
