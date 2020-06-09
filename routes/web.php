<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'StrategyController@index');
    

Route::prefix('strategy')->group(function () {
    
});
Auth::routes();

