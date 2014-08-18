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
	return View::make('frontend/home')->with(
		array(
			'title'		=>		"Home"
		));
});

Route::get('/quienessomos', function()
{
	return View::make('frontend/home')->with(
		array(
			'title'		=>		"Quiénes somos"
		));
});

Route::get('/quehacemos', function()
{
	return View::make('frontend/home')->with(
		array(
			'title'		=>		"Qué hacemos"
		));
});

Route::get('/dondeestamos', function()
{
	return View::make('frontend/home')->with(
		array(
			'title'		=>		"Dónde estamos"
		));
});

Route::get('/fotos', function()
{
	return View::make('frontend/home')->with(
		array(
			'title'		=>		"Fotos"
		));
});

Route::get('/contacto', function()
{
	return View::make('frontend/home')->with(
		array(
			'title'		=>		"Contacto"
		));
});

