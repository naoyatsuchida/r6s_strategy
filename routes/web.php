<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'StrategyController@index');
    

Route::prefix('strategy')->group(function () {
    
});

Route::group(['prefix'=>'strategy','middleware' => 'auth'], function(){
    Route::get('create', 'StrategyController@create')->name('strategy.create');
    Route::get('show/{id}', 'StrategyController@show')->name('strategy.show');
    Route::post('store', 'StrategyController@store')->name('strategy.store');
    Route::get('edit/{id}', 'StrategyController@edit')->name('strategy.edit');
    Route::post('destroy/{id}', 'StrategyController@destroy')->name('strategy.destroy');
});

Route::group(['prefix'=>'user','middleware' => 'auth'], function(){
    Route::get('show/{id}', 'UserController@show')->name('user.show');
});


Auth::routes();

