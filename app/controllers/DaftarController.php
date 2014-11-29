<?php

class DaftarController extends Controller {

	public function getDaftar()
	{
		return View::make('daftar');
	}

	public function postDaftar()
	{
		$data = new Daftar(Input::all());
		$data -> save();

		return Redirect::to('beranda');
	}

	public function getIndex()
	{
		return View::make('daftar');
	}
	

}