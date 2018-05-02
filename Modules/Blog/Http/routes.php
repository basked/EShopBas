<?php

Route::group(['middleware' => 'web', 'prefix' => 'blog', 'namespace' => 'Modules\Blog\Http\Controllers'], function()
{
    Route::get('/', 'BlogController@index');
    Route::get('/1', function () {
        //$banks=[];
        echo Form::checkbox('name', 'value', true);
        echo Form::number('name', 'value');
        echo Form::date('name', \Carbon\Carbon::now());
        echo Form::select('size', ['L' => 'Large', 'S' => 'Small']);
        echo Form::select('size', ['L' => 'Large', 'S' => 'Small'], 'S');
        echo Form::submit('Click Me!');
    });


});
