<?php

class Controller{
	//create public vars for the loader and the model
	public $load;
	public $model;
	
	function __construct() {
		//init the public vars
		$this->load = new Load();
		$this->model = new Model();
		
		//check which page is requesten
		if(!isset($_POST['submit']) || !isset($_POST['naam']) || !isset($_POST['beroep'])) {
			$this->home();
		} else {
			$this->result();
		}
	}
	
	function home() {
		$this->getPage('form', false);
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