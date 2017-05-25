<?php if (!defined('PATH_SYSTEM')) die('Bad request!');

class Home extends QD_Controller
{
	function __construct() {
		parent::__construct();
		$this->load->library('upload');
	}

	function index() {

	}

	function testLibrary() {
		$myUploader = $this->load->library->upload;
		$myUploader->upload();
	}

	function testView() {
		$list = array(
			array(
				'name' => 'Dat 1',
				'age' => 19
			),
			array(
				'name' => 'Dat 2',
				'age' => 20
			)
		);
		$data = array(
			'list' => $list
		);
		$this->load->view('view', $data);
	}
}