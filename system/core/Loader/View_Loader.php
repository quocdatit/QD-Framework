<?php if(!defined('PATH_SYSTEM')) die('Bad request!');

class View_Loader
{
	public function load($_view, $data = array()) {
        extract($data);
        ob_start();
        require_once(PATH_APPLICATION . '/view/' . $_view . '.php');
        $html = ob_get_contents();
        ob_end_clean();
        echo $html;
    }
}