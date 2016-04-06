<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Base_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{		
		$data = array();

		Template::set_view('v_home');
        Template::set($data);
        Template::render();
	}
		
}