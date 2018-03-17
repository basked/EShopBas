<?php

Route::group(['middleware' => 'web', 'prefix' => 'dev', 'namespace' => 'Modules\Dev\Http\Controllers'], function()
{
    Route::get('/', 'DevController@index');
});
