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

Route::get('login', function()
{
	return View::make('backend/login');
});


Route::group(array("before" => "csrf"), function()
{
	Route::post('login_check', function()
	{
		$loginData = array(
			"email"			=>			e(Input::get("email")),
			"password"		=>			e(Input::get("password"))
		);

		if (Auth::attempt($loginData)) 
		{
			return Redirect::to("dashboard");
		}
		else
		{
			return Redirect::to("login")->with(array("error" => "Email o password incorrectos"));
		}
	
	});

});

Route::group(array("before" => "auth"), function()
{

	Route::get('dashboard', function()
	{
		return View::make('backend/dashboard')->with(
			array(
				'title'		=>		"Panel de Control",
	            'subtitle'	=>		"Editar secciones"
			));
	});

	Route::get('/seo', function()
	{
		return View::make('backend/seo')->with(
			array(
				'title'		=>		"Panel de Control",
	            'subtitle'	=>		"Editar SEO"
			));
	});

	Route::get('/config', function()
	{
		return View::make('backend/config')->with(
			array(
				'title'		=>		"Panel de Control",
	            'subtitle'	=>		"Configuración"
			));
	});
});

Route::get("logout", function()
{
	Session::flush();
	Auth::logout();
		
	return Redirect::to("login")->with(array("error" => "Has cerrado sesión correctamente"));
});


