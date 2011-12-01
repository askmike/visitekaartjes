<!doctype html>
<html lang=nl>
<head>
	<meta charset=utf-8>
	<meta http-equiv=X-UA-Compatible content="IE=edge,chrome=1">
	<title>Visitekaartjes Generator</title>
	<meta name=description content="visitekaartjes genator is een HvA schoolopdracht">
	<meta name=author content="Mike van Rossum">
  	<meta name=viewport content="width=device-width,initial-scale=1">
	<!-- CSS concatenated and minified via ant build script-->
	<link rel=stylesheet href='static/css/style.css'>
	<!-- end CSS-->
</head>
<body class='<?php echo $request; ?>'> 
  <div id="container">
    <header>
		<h1 class='ir'>
			Visitekaartjes Generator
		</h1><?php echo $menu;?> <span class='code'>(alles is minified: <a href="https://github.com/askmike/visitekaartjes">check hier de code</a>)</span>
    </header>
    <div id="main" role="main">