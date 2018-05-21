<?php

Route::group(['middleware' => 'web', 'prefix' => 'course', 'namespace' => 'Modules\Course\Http\Controllers'], function()
{
    Route::get('/', 'CourseController@index');
    //categories
    Route::get('/admin/categories/parse', 'Admin\dark\CategoriesController@parse')->name('categories-parse');
    Route::resource('/admin/categories', 'Admin\dark\CategoriesController');
    //sources
    Route::get('/admin/sources/parse', 'Admin\dark\SourcesController@parse')->name('sources-parse');
    Route::resource('/admin/sources', 'Admin\dark\SourcesController');
    //cources
    Route::get('/admin/courses/parse', 'Admin\dark\CoursesController@parse')->name('courses-parse');
    Route::resource('/admin/courses', 'Admin\dark\CoursesController');
  });
