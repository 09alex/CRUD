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

Route::group(['prefix' => 'v1'], function () {
    Route::get('get-countries', 'APIController@getCountries');
    Route::get('get-states', 'APIController@getStates');
    Route::get('preview', 'APIController@getDetail');
    Route::post('set-customer', 'APIController@setCustomer');
});
