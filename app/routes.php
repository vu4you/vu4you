<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('maintenance');
});

Route::get('/start', 'StartController@index');
Route::get('/om_oss', 'AboutController@index');
Route::get('/kontakta', 'ContactController@index');
Route::get('/kalender', 'CalendarController@index');


Route::get('/verksamheter/', 'ActivitiesController@index');
Route::get('/verksamheter/onsdagar', 'ActivitiesController@openHouse');
Route::get('/verksamheter/lan', 'ActivitiesController@lan');
Route::get('/verksamheter/warhammer', 'ActivitiesController@warhammer');