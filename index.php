<?php
//get everything we need
require 'core/load.php';
require 'core/model.php';
require 'core/controller.php';
require 'core/menu.php';

//BASE is the root of our app
//substr strips off 'index.php'
define('BASE',substr($_SERVER['PHP_SELF'],0,-9));

//power up a new controller
new Controller();

?>