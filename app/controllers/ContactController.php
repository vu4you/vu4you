<?php

class ContactController extends BaseController {

	
	public function index()
	{
		$contacts = array();
		array_push($contacts, array("name"=>"Andreas Person Stenberg","role"=>"Ordförande","phone"=>"072-005 05 80", "email"=> "ordforande@vu4you.se"));
		array_push($contacts, array("name"=>"Tobias Eklund","role"=>"Vice Ordförande","phone"=>"073-032 08 11","email"=> "viceordforande@vu4you.se"));
		array_push($contacts, array("name"=>"Joel Eklund","role"=>"Kassör","email"=> "kassor@vu4you.se"));
		array_push($contacts, array("name"=>"Patrik Andersson","role"=>"Ledarmot"));
		array_push($contacts, array("name"=>"Emil Vesterberg","role"=>"Ledarmot"));
		return View::make('contact/index')->with("contacts",$contacts);
	}

}