<?php if (!defined('PATH_SYSTEM')) die('Bad request!');

class Home extends QD_Controller
{
	function __construct() {
		parent::__construct();
		
	}

	function index() {
		echo 'hello';
	}

	function testLibrary() {
		$this->library->load('upload');
		$myUploader = $this->library->upload;
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
		$this->view->load('view', $data);
	}

	function testModel() {
		$this->model->load('demo');
		$myModel = $this->model->demo;

		echo $myModel->getUser('Huỳnh Quốc Đạt');
	}
}