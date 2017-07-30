<?php

namespace App\Http\Controllers;

class WebController extends Controller{
	public function index(){
		//$this->db->select('Select name')
		return view("test");
	}
}