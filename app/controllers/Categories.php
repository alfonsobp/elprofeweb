<?php

class Categories extends BaseController {
	public function index()
	{
		return View::make('middle/categories');
	}
}