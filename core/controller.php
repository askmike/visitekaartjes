<?php

class Controller{
	public $load;
	public $model;
	
	function __construct() {
		$this->load = new Load();
		$this->model = new Model();
		
		if(!isset($_POST['submit']) || !isset($_POST['naam']) || !isset($_POST['beroep'])) {
			$this->home();
		} else {
			$this->result();
		}
	}
	
	function home() {
		$this->load->view('header');
		$this->load->view('form');
		$this->load->view('footer');
	}
	
	function result() {
		$data = $this->model->getData();
		$this->getPage('results', $data);
	}
	
	function getPage($view, $data) {
		$this->load->view('header');
		$this->load->view($view, $data);
		$this->load->view('footer', $data);
	}
}

?>