<?php if (!defined('PATH_SYSTEM')) die('Bad request!');

class QD_Controller
{	
	protected $model = NULL;
	
	protected $view = NULL;
	
	protected $helper = NULL;
	
	protected $library = NULL;

	protected $config = NULL;

	protected $params = NULL;

	protected $load = NULL;
	
	function __construct() {
		// Config_Loader
		require_once(PATH_SYSTEM . '/core/Loader/Config_Loader.php');
	    $this->config = new Config_Loader();
	    $this->config->load('config');

	    require_once(PATH_SYSTEM . '/core/QD_Loader.php');
	    $this->load = new QD_Loader();
	    
	    // Get Parameters from $_SERVER['QUERY_STRING']
		$this->getParameters();
	}

	protected function getParameters() {
		if(isset($_SERVER['QUERY_STRING']) && !empty($_SERVER['QUERY_STRING'])) {
			$_strQuery = $_SERVER['QUERY_STRING'];
			$_strQuery = explode('&', $_strQuery);
			$_params = array();
			foreach ($_strQuery as $value) {
				$value = explode('=', $value);
				$_params[$value[0]] = $value[1];
			}
			$this->params = $_params;
		}
	}
}