<?php if(!defined('PATH_SYSTEM')) die('Bad request!');

require_once(PATH_SYSTEM . '/library/DB2_Library.php');

class QD_Model
{
	protected $db = NULL;

	function __construct() {
		$this->db = new DB2_Library();
		$this->db->connect();
	}

	function __destruct(){
		$this->db->disconnect();
	}
}