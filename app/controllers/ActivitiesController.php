<?php

class ActivitiesController extends BaseController {

	
	public function index()
	{
		return View::make('activities/index');
	}
	public function warhammer()
	{
		return View::make('activities/warhammer');
	}
	public function lan()
	{
		return View::make('activities/lan');
	}

}