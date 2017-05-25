<?php if(!defined('PATH_SYSTEM')) die('Bad request!');

class Setting extends QD_Controller
{
	
	function __construct() {
		
	}

	public function index() {
		echo 'Setting - index';
	}

	public function profile($id = NULL) {
		echo 'Setting - profile - ' . $id;
	}
}