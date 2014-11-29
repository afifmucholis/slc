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

	public function getIndex()
	{
		return View::make('beranda');
	}

	public function getAbout()
	{
		return View::make('about');
	}

	public function getDaftar()
	{
		return View::make('daftar');
	}
	
	public function postDaftar()
	{
		$data = new Daftar(Input::all());
		$data -> save();

		return Redirect::to('daftar');
	}

	public function getLogin()
	{
		return View::make('login');
	}

	public function postLogin()
	{
		

		if (Auth::attempt(
			array(
				'username' => Input::get('username'), 
				'password' => Input::get('password')
				)
			)
			) {

			return Redirect::to('admin');

		}else{
			Session::flash('error', 'Gimana si??');
			return Redirect::to('login');
		}

	}

}