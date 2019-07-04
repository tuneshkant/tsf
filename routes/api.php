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
Route::get('/livesessionsapi','LivesessionapiController@index');
Route::get('/livesessionsapi/{id}','LivesessionapiController@show');
Route::post('/livesessionsapi','LivesessionapiController@store');
Route::put('/livesessionsapi','LivesessionapiController@store');

Route::delete('/livesessionsapi/{id}','LivesessionapiController@destroy');


Route::get('/upcomingeventapi','UpcomingeventControllerapi@index');
Route::get('/upcomingeventapi/{id}','UpcomingeventControllerapi@show');
Route::post('/upcomingeventapi','UpcomingeventControllerapi@store');
Route::put('/upcomingeventapi','UpcomingeventControllerapi@store');

Route::delete('/upcomingeventapi/{id}','UpcomingeventControllerapi@destroy');