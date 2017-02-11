<?php

use Illuminate\Http\Request;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');



Route::resource('authenticate', 'AuthenticateController', ['only' => ['index']]);
Route::post('authenticate', 'AuthenticateController@authenticate');
Route::post('createAircraft', 'AircraftController@createAircraft');
Route::post('showAircraft', 'AircraftController@index');
