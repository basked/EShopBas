<?php

Route::group(['middleware' => 'web', 'prefix' => 'basthemes', 'namespace' => 'Modules\BasThemes\Http\Controllers'], function()
{
    Route::get('/', 'BasThemesController@index');

});
