<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function main()
	{
		if(Auth::check()){
			// var_dump(Auth::user());
			return View::make('main')->with('user', Auth::user());
		}else{
			return View::make('Usuarios.login')->with('class', 'absolute');
		}	
	}

}
