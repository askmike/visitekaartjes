<!doctype html>
<html lang=nl>
<head>
	<meta charset=utf-8>
	<meta http-equiv=X-UA-Compatible content="IE=edge,chrome=1">
	<title>Visitekaartjes Generator</title>
	<meta name=description content="visitekaartjes genator is een HvA schoolopdracht">
	<meta name=author content="Mike van Rossum">
  	<meta name=viewport content="width=device-width,initial-scale=1">
	<link rel=stylesheet href='css/style.css'>
</head>
<?php $result = isset($_POST['submit']) ?>
<body>
  <div id="container">
    <header>
		<h1 class='ir'>
			Visitekaartjes Generator
		</h1>PHP / 
		<span class="comingsoon"><a href='./'>AJAX</a> / <a href='./'>JS</a></span>
		 &#171; (<a href="https://github.com/askmike/visitekaartjes">code</a>)
    </header>
    <div id="main" role="main">
	<?php if(!$result) { ?>
		<div class='kaartje'>
			<form method='post'>
				<input name='naam' placeholder='naam' />
				<input name='beroep' placeholder='beroep' />
				<input type="submit" value="maak" name="submit" />
			</form>
		</div>
		<?php } else { 
			//we only need the file if we need to do something with user input
			require('inc/functions.inc.php');
			//get the data from POST
			$safePost = getPostInput( array('naam','beroep') );
			//loop 10 times to display 10 visitekaartjes
			for ($i = 1; $i <= 10; $i++) { ?>
				<div class='kaartje klaar'>
					<div class='left'>
						<img src="img/kaartje.png" width="133" height="66">
						<h2>
							mijn realiteit
						</h2>
					</div>
					<div class="right">
						<div class="black"></div>
						<div class="rotate">
							<?php echo $safePost['naam']; ?>
							<span>
								<?php echo $safePost['beroep']; ?>
							</span>
						</div>
					</div>
				</div>
			<?php }
		} ?>
    </div>
  </div>

  <script>
	//need a better way to pass data from server to client.
	result = <?php echo $result ?>;
  </script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.6.2.min.js"><\/script>')</script>
  <script defer src="js/script.js"></script>
	
  <script>
    var _gaq=[['_setAccount','UA-19313599-6'],['_trackPageview'],['_trackPageLoadTime']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>


  <!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->
  
</body>
</html>
