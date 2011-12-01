<?php

class Controller{
	//create public vars for the loader and the model
	public $load;
	public $model;
	public $request;
	public $menu;
	
	function __construct() {
		//init the public vars
		$this->load = new Load();
		$this->model = new Model();
		
		//set request
		$this->request = $_GET['r'];
		
		//create manu
		$this->menu = new Menu($this->request);
		
		$this->route();
	}
	
	function route() {

		switch($this->request) {
			case 'ajax' :
				$this->ajax();
			break;

			case 'json' :
				$this->json();
			break;

			case 'javascript' :

			break;

			case 'result' :
				$this->result();
			break;

			default: //php
				if( empty($_POST['naam']) || empty($_POST['beroep']) ) {
					$this->home();
				} else {
					$this->result();
				}
			break;
		}
	}
	
	function home() {
		$data = $this->getData();
		$this->getPage('form', $data);
	}
	
	function result() {
		$this->request = 'result';
		$data = $this->getData();
		$this->getPage('results', $data);
	}
	
	function json() {
		$data = $this->model->getGetInput();
		$this->load->json($data);
	}
	
	function ajax() {
		$data = $this->getData();
		$this->getPage('form',$data);
	}
	
	function getPage($view, $data) {  	
		$this->load->view('header', $data);
		$this->load->view($view, $data);
		$this->load->view('footer');
	}
	
	function getData() {
		//data from the model
		$data = $this->model->getData();
		//our own data
		$data['menu'] = $this->menu;
		$data['request'] = $this->request;
		
		return $data;
	}
}

?>