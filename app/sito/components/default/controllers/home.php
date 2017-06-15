<?php

defined('CMS_TA') or die;

class Home extends ControllerSito
{
	protected $comp = 'default';
	
	public function __construct() {
		// echo "Home Controller<br>";
		parent::__construct();
	}

	public function get() {
		// Flash::add('', '', '', '/kalendari/muaji', 1);
		// if(! $this->user) {
		// 	Flash::add('', '', '', '/user/login/', true);
		// }
		$data = array();
		$this->view('home', $data);
		return false;
	}

}
