<?php
use App\BankOffice;

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
   return view('layouts.dashboard');
    // return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/testSetDB', 'HomeController@testSetDB');

Route::get('dashboard', function () {
    return view('layouts.dashboard', ['name' => 'basked.pro']);
})->name('dashboard');

Route::get('tables', function () {
    return view('layouts.tables', ['name' => 'basked.pro']);
});

Route::get('datatables', function () {
    return view('layouts.datatables', ['name' => 'basked.pro']);
});


Route::get('charts', function () {
    return view('layouts.charts', ['name' => 'basked.pro']);
});

Route::get('charts-gauge', function () {
    return view('layouts.charts-gauge', ['name' => 'basked.pro']);
});
Route::get('forms', function () {
    return view('layouts.forms', ['name' => 'basked.pro']);
});
// forms
Route::get('forms-advanced', function () {
    return view('layouts.forms-advanced', ['name' => 'basked.pro']);
});

Route::get('forms-autocomplete', function () {
    return view('layouts.forms-autocomplete', ['name' => 'basked.pro']);
});

Route::get('forms-texteditor', function () {
    return view('layouts.forms-texteditor', ['name' => 'basked.pro']);
});
Route::get('forms-dropzone', function () {
    return view('layouts.forms-dropzone', ['name' => 'basked.pro']);
});
// components
Route::get('components-cards', function () {
    return view('layouts.components-cards', ['name' => 'basked.pro']);
});

Route::get('components-calendar', function () {
    return view('layouts.components-calendar', ['name' => 'basked.pro']);
});

Route::get('components-gallery', function () {
    return view('layouts.components-gallery', ['name' => 'basked.pro']);
});

Route::get('components-notifications', function () {
    return view('layouts.components-notifications', ['name' => 'basked.pro']);
});

Route::get('components-preloader', function () {
    return view('layouts.components-preloader', ['name' => 'basked.pro']);
});
Route::get('components-loading-buttons', function () {
    return view('layouts.components-loading-buttons', ['name' => 'basked.pro']);
});

Route::get('dev-grid', function () {
    return view('layouts.dev-grid', ['name' => 'basked.pro']);
});

Route::get('template', function () {
    return view('layouts.template');
});

Route::get('template1', function () {
    return view('layouts.template');
});
Route::get('template2', function () {
    return view('layouts.template');
});
Route::get('template3', function () {
    return view('layouts.template');
});


/*DevExtreme*/
//Route::get('dev-grid', 'DevController@DevData');
Route::get('dev-grid-data', 'DevController@devGridData');
Route::get('dev-grid', 'DevController@devGrid');
/*End DevExtreme*/

Route::get('banks', 'BankController@banks');
Route::get('banks_parse', 'BankController@banksParse');
Route::get('banks_kurs/{bankId}', 'BankController@banksKurses');


Route::get('bank_offices', 'BankOfficeController@bankOffices');
Route::get('bank_offices_parse', 'BankOfficeController@bankOfficesParse');

Route::get('bank_atms', 'BankAtmController@bankAtms');
Route::get('bank_atms_parse', 'BankAtmController@bankAtmsParse');

Route::get('bank_kurses', 'BankKursController@bankKurses');
Route::get('bank_kurses_parse', 'BankKursController@bankKursesParse');


// test Route
Route::get('testConnect', 'HomeController@testConnect');

// End test Route