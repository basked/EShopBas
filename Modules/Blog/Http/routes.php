<?php

Route::group(['middleware' => 'web', 'prefix' => 'blog', 'namespace' => 'Modules\Blog\Http\Controllers'], function () {
    Route::get('/', 'BlogController@index');
   //переназначаем имена роутов потому что есть такие же в модуле COURSE
    Route::resource('/admin/categories', 'Admin\dark\CategoriesController')->names([
         'index'=>'blog-index',
         'create' => 'blog-create',
         'update' => 'blog-update',
         'edit'=>'blog-edit',
         'destroy'=>'blog-destroy',
         'store'=>'blog-store'
        ]);
    Route::resource('/admin/posts', 'Admin\dark\PostsController');
    Route::resource('/admin/tags', 'Admin\dark\TagsController');
    Route::resource('/admin/comments', 'Admin\dark\CommentsController');
    Route::get('/server', function () {
        echo $_SERVER['REMOTE_HOST'];

    });

//    Route::get('/admin', 'Admin\DashboardController@index');
//    Route::get('/lte', 'Admin\DashboardController@lte');
//    Route::get('/k', 'BlogController@index');
//    Route::get('/all-data', 'BlogController@allData');

});
