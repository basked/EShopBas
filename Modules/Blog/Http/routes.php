<?php

Route::group(['middleware' => 'web', 'prefix' => 'blog', 'namespace' => 'Modules\Blog\Http\Controllers'], function()
{

Route::get('/','BlogController@index');
Route::resource('/admin/categories','Admin\dark\CategoriesController');

    Route::get('/admin', 'Admin\DashboardController@index');
    Route::get('/lte', 'Admin\DashboardController@lte');
    Route::get('/k', 'BlogController@index');
    Route::get('/all-data', 'BlogController@allData');

});
