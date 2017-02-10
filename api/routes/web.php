<?php


Route::get('/', function () {
    return view('welcome');
});
Route::post('createAircraft', 'AircraftController@createAircraft');

//Route::group(['prefix' => 'api'], function()
//{
////    Route::resource('authenticate', 'AuthenticateController', ['only' => ['index']]);
//
//    Route::get('login',  function () {
//        return view('admin/pages/examples/login');
//    });
//    Route::get('register',  function () {
//        return view('admin/pages/examples/register');
//    });
//    Route::get('authenticate', 'AuthenticateController@authenticate');
//});