<?php

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

use App\Bank;

Route::get('banks', function () {
    // If the Content-Type and Accept headers are set to 'application/json',
    // this will return a JSON structure. This will be cleaned up later.
    return Bank::get(['id', 'name', 'link', 'site']);
});
Route::post('banks', function (Request $request) {
    $bank = new Bank();
    $bank->name =$request->name;
    $bank->link = 'banks/basked';
    $bank->bank_site_id = rand(40,1000);
    $bank->site = $request->site;
    $bank->status = 1;
    $bank->save();
    return $bank;
});

Route::delete('banks/{id}', function ($id) {
    $bank = Bank::findOrFail($id);
    $bank->delete();
});


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
