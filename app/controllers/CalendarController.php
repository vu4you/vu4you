<?php

class CalendarController extends BaseController {

	
	public function index()
	{
		return View::make('calendar/index');
	}

}