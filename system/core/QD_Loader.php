<?php if(!defined('PATH_SYSTEM')) die('Bad request!');

class QD_Loader
{
	static $config = array();
	static $library = NULL;
	static $helper = NULL;
	static $view = NULL;

	function __construct() {
		
	}

	public function view($_view, $data = array()) {
        extract($data);
        ob_start();
        require_once(PATH_APPLICATION . '/view/' . $_view . '.php');
        $html = ob_get_contents();
        ob_end_clean();
        echo $html;
    }

    public function library($_library) {
        if (empty($this->{$_library})) {
            $_class = ucfirst($_library) . '_Library';
            require_once(PATH_SYSTEM . '/library/' . $_class . '.php');
            $this->library->{$_library} = new $_class();
        }
    }
}