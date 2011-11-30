<?php
//we always need views, with load we can get them
require 'core/load.php';
require 'core/model.php';
require 'core/controller.php';

new Controller();

/*$load = new Load;

if(!isset($_POST['submit'])) {
	home();
} else {
	//we need a model to process data
	require 'core/model.php';
	results();
}

function home() {
	getPage($load, 'form');
}

function results() {
	//we need to process data so we need the model
	require('core/model.php');
	
	//get all the data
	$model = new Model();
	extract($model->data);
	
	//get the results
	getPage($load, 'results');
}

function getPage($load, $page) {
	global $load->view('header');
	global $load->view($page);
	global $load->view('footer');
}*/

?>