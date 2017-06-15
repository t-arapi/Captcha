<?php

defined('CMS_TA') or die;

class Home extends ControllerSito
{
	protected $comp = 'default';

	public function __construct() {

		parent::__construct();
	}

	public function get() {
		$data = array();
		$this->view('home', $data);
		return false;
	}

}
