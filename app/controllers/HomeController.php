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

//	protected $layout = 'layouts.master';
	public function showWelcome()
	{
//		$this->layout->content = View::make('index');
		return View::make('admin.index');
	}

	public function showUser() {
		return View::make('users');
	}

}
