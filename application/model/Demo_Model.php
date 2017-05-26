<?php if(!defined('PATH_SYSTEM')) die('Bad request!');

class Demo_Model extends QD_Model
{
	
	function __construct() {
		parent::__construct();
	}

	function getUser($username) {
		return $username;
	}
}