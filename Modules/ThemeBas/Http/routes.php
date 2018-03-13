<?php

Route::group(['middleware' => 'web', 'prefix' => 'themebas', 'namespace' => 'Modules\ThemeBas\Http\Controllers'], function()
{
    Route::get('/', 'ThemeBasController@index');
});
