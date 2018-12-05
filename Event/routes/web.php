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
Route::resource('event','CreateEventController');
Route::get('/','CreateEventController@welcome');
Route::get('event/details/{id}','CreateEventController@details');
Route::get('event/registration/{id}','CreateEventController@show_ev');
Route::get('event/registration/{id}','CreateEventController@registration');
Route::post('event/registration/{id}','CreateEventController@eventregistration');
Route::get('event/event_registered/{id}','CreateEventController@event_registered');

