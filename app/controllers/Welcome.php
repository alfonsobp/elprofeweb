<?php

class Welcome extends BaseController {
	public function index()
	{
		return View::make('top/welcome');
	}
}