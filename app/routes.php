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
			'title'		        =>		"Abogado en Reus",
            'metadescription'   =>      "Abogado en Reus, servicios de Derecho Civil, Derecho Mercantil, Derecho Familiar, Derecho Inmobiliario, Derecho sobre propiedad",
            'keywords'          =>      "abogado en reus, abogados en reus, abogado reus, abogados reus, responsabilidad civil en reus, accidentes de trabajo en reus"
		));
});

Route::get('/quienessomos', function()
{
	return View::make('frontend/section_qs')->with(
		array(
			'title'		        =>		"Abogado en Reus | Quiénes Somos",
            'metadescription'   =>      "Abogado en Reus, servicios de Derecho Civil, Derecho Mercantil, Derecho Familiar, Derecho Inmobiliario, Derecho sobre propiedad",
            'keywords'          =>      "abogado en reus, abogados en reus, abogado reus, abogados reus, responsabilidad civil en reus, accidentes de trabajo en reus, accidentes de trafico en reus, derecho sanitario en reus",
            'seccion'			=>		"Quiénes somos",
            'title_content'		=>		"Quiénes somos"

		));
});

Route::get('/quehacemos', function()
{
	return View::make('frontend/section_qh')->with(
		array(
			'title'		        =>		"Abogado en Reus | Qué hacemos",
            'metadescription'   =>      "Abogado en Reus, servicios de Derecho Civil, Derecho Mercantil, Derecho Familiar, Derecho Inmobiliario, Derecho sobre propiedad",
            'keywords'          =>      "abogado en reus, abogados en reus, abogado reus, abogados reus, responsabilidad civil en reus, accidentes de trabajo en reus, accidentes de trafico en reus, derecho sanitario en reus",
            'seccion'			=>		"Qué hacemos",
            'title_content'		=>		"Qué hacemos"
		));
});

Route::get('/dondeestamos', function()
{
	return View::make('frontend/section_de')->with(
		array(
			'title'		        =>		"Abogado en Reus | Quiénes Somos",
            'metadescription'   =>      "Abogado en Reus, servicios de Derecho Civil, Derecho Mercantil, Derecho Familiar, Derecho Inmobiliario, Derecho sobre propiedad",
            'keywords'          =>      "abogado en reus, abogados en reus, abogado reus, abogados reus, responsabilidad civil en reus, accidentes de trabajo en reus, accidentes de trafico en reus, derecho sanitario en reus",
            'seccion'			=>		"Dónde estamos",
            'title_content'		=>		"Dónde estamos"
		));
});

Route::get('/contacto', function()
{
	return View::make('frontend/section_ct')->with(
		array(
			'title'		        =>		"Abogado en Reus | Quiénes Somos",
            'metadescription'   =>      "Abogado en Reus, servicios de Derecho Civil, Derecho Mercantil, Derecho Familiar, Derecho Inmobiliario, Derecho sobre propiedad",
            'keywords'          =>      "abogado en reus, abogados en reus, abogado reus, abogados reus, responsabilidad civil en reus, accidentes de trabajo en reus, accidentes de trafico en reus, derecho sanitario en reus",
            'seccion'			=>		"Contacto",
            'title_content'		=>		"Contacto"

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


