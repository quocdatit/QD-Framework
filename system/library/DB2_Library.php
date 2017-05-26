<?php if(!defined('PATH_SYSTEM')) die('Bad request!');

class DB2_Library
{
	protected $connection;

	function connect(){
		if(!file_exists(PATH_SYSTEM . '/config/database.php')) die('Can\'t find: '. PATH_SYSTEM . '/config/database.php');
		else{
			$db_config = require_once(PATH_SYSTEM . '/config/database.php');
			$strConn = "DATABASE=" . $db_config['db_name'] . ";HOSTNAME=" . $db_config['db_host'] . ";PORT=" . $db_config['db_port'] . ";PROTOCOL=TCPIP;UID=" . $db_config['db_user'] . ";PWD=" . $db_config['db_pass'] . "";
			$this->connection = db2_connect($strConn, '', '');
		}
	}

	function disconnect(){
		db2_close($this->connection);
	}
}