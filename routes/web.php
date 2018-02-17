<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/testSetDB', 'HomeController@testSetDB');

Route::get('dashboard',function (){
   return view('layouts.dashboard', ['name' => 'basked.pro']);
})->name('dashboard');

Route::get('tables',function (){
   return view('layouts.tables', ['name' => 'basked.pro']);
});

Route::get('datatables',function (){
   return view('layouts.datatables', ['name' => 'basked.pro']);
});


Route::get('charts',function (){
   return view('layouts.charts', ['name' => 'basked.pro']);
});

Route::get('charts-gauge',function (){
   return view('layouts.charts-gauge', ['name' => 'basked.pro']);
});
Route::get('forms',function (){
   return view('layouts.forms', ['name' => 'basked.pro']);
});

Route::get('forms-advanced',function (){
    return view('layouts.forms-advanced', ['name' => 'basked.pro']);
});

Route::get('forms-autocomplete',function (){
    return view('layouts.forms-autocomplete', ['name' => 'basked.pro']);
});

Route::get('forms-texteditor',function (){
    return view('layouts.forms-texteditor', ['name' => 'basked.pro']);
});
Route::get('forms-dropzone',function (){
    return view('layouts.forms-dropzone', ['name' => 'basked.pro']);
});