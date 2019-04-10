<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('person', 'vendorController@getPersonDetails');
Route::get('person/{id}', 'vendorController@getPersonDetailsById');
Route::get('person/{id}/{dist}', 'vendorController@getPersonByDistrict');
Route::post('person', 'vendorController@savePerson');
Route::put('login', 'vendorController@savePerson')->name('logIn');
