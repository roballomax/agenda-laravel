<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/calendar/{calendar}', 'CalendarController@index');
Route::post('/calendar/add', 'CalendarController@add');
Route::get('/calendar/delete/{calendar}', 'CalendarController@delete');
Route::get('/calendar/edit/{calendar}', 'CalendarController@edit');
Route::patch('/calendar/{calendar}/update', 'CalendarController@update');

Route::post('/event/add', 'EventsController@add');
Route::get('/event/edit/{event}', 'EventsController@edit');
Route::patch('/event/{event}/update', 'EventsController@update');
Route::get('/event/delete/{event}', 'EventsController@delete');
