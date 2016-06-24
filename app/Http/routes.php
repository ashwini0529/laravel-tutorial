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

Route::get('/check', function(){
	return view('new');
});

Route::get('about','pageController@about');

Route::get('/home','pageController@home');

Route::get('/extend',function(){
	return view('extend');
});
// A route to pass arrays.

Route::get('cards', 'CardsController@index');

Route::get('cards/{card}', 'CardsController@show');

Route::post('cards/{card}/notes', 'NotesController@addNote');


//Edit a particular note

Route::get('/note/{note}/edit','NotesController@edit');
Route::patch('/note/{note}', 'NotesController@update');