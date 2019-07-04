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

Route::get('/', 'welcomeController@homepage');


Route::get('/joinourteam', function () {
    return view('jointeams.create');
});
Route::get('/writereview', function () {
    return view('testimonials.create');
});



       

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('adminupcomingevents','Upcomingevent');
Route::resource('livesessions','LivesessionController');
Route::resource('healthnews','HealthnewsController');
Route::resource('testimonials','testimonialController');
Route::resource('jointeams','jointeamController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

