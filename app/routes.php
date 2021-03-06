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

Route::get('/punkte/nullen/{id}', array(
	'as' => 'point.destroy',
	'uses' => 'PointController@destroy'
));

Route::post('/punkte/vergeben/{id}', array(
	'as' => 'point.create',
	'uses' => 'PointController@create' 
));



Route::get('/punkte/vergeben', array(
	'as' => 'point.index',
	'uses' => 'PointController@index' 
));

Route::get('/bestenliste', array(
	'as' => 'point.best',
	'uses' => 'PointController@best' 
));

Route::delete('/teilnehmer/{id}', array(
	'as' => 'member.destroy',
	'uses' => 'MemberController@destroy' 
));

Route::get('/teilnehmer/anmelden', array(
	'as' => 'member.create',
	'uses' => 'MemberController@create'
));

Route::post('/teilnehmer', array(
	'as' => 'member.store',
	'uses' => 'memberController@store' 
));

Route::get('/', function()
{
    return Redirect::route('member.create');
});
