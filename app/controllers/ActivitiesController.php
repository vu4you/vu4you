<?php

class ActivitiesController extends BaseController {

	
	public function index()
	{
		return View::make('activities/index');
	}
	public function openHouse()
	{
		return View::make('activities/open_house');
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