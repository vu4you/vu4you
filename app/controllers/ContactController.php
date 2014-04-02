<?php

class ContactController extends BaseController {

	
	public function index()
	{
		return View::make('contact/index');
	}

}