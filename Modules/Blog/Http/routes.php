<?php

Route::group(['middleware' => 'web', 'prefix' => 'blog', 'namespace' => 'Modules\Blog\Http\Controllers'], function()
{
        Route::get('/', 'BlogController@index');
        Route::resource('/admin/categories', 'Admin\dark\CategoriesController');
        Route::resource('/admin/posts', 'Admin\dark\PostsController');
        Route::resource('/admin/tags', 'Admin\dark\TagsController');
        Route::resource('/admin/comments', 'Admin\dark\CommentsController');


//    Route::get('/admin', 'Admin\DashboardController@index');
//    Route::get('/lte', 'Admin\DashboardController@lte');
//    Route::get('/k', 'BlogController@index');
//    Route::get('/all-data', 'BlogController@allData');

});
