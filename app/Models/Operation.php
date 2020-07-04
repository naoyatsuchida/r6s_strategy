<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{
    public function strategy()
    {
        return $this->belongsToMany('App\Models\strategy','strategy_operation')->using('App\Models\Strategy_Operation');
    }



    public static function OperationAttack()
    {
        
        $attack['name'] = Operation::where('role','attack')->select('name')->get();
        $aarray = [];
        $i = 1;
        foreach($attack['name'] as $name){
            $aarray += array($i => $name['name']);
            $i++;
        }
        return $aarray;
    }
    
    public static function OperationDefense()
    {
        $defense['name'] = Operation::where('role','defense')->select('name')->get('name');
        $darray = [];
        $i = 29;
        foreach($defense['name'] as $name){
                $darray += array($i => $name['name']);
                $i++;
            }
        return $darray;
    }

    
}
