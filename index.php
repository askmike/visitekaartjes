<!doctype html>
<!--[if lt IE 7]><html class="no-js ie6 oldie" lang=en><![endif]-->
<!--[if IE 7]><html class="no-js ie7 oldie" lang=en><![endif]-->
<!--[if IE 8]><html class="no-js ie8 oldie" lang=en><![endif]-->
<!--[if gt IE 8]><!--> <html class=no-js lang=en> <!--<![endif]-->
<head>
  <meta charset=utf-8>

  
  <meta http-equiv=X-UA-Compatible content="IE=edge,chrome=1">

  <title>Visitekaartjes Generator</title>
  <meta name=description content="visitekaartjes genator is een HvA schoolopdracht">
  <meta name=author content="Mike van Rossum">

  
  	<meta name=viewport content="width=device-width,initial-scale=1">
	<link rel=stylesheet href='css/style.css'>
</head>
<body <?php if(isset($_POST['submit'])) { echo 'class="result"'; }?>>
  <div id="container">
    <header>
		<h1 class='ir'>
			Visitekaartjes Generator
		</h1>PHP / 
		<span class="comingsoon"><a href='./'>AJAX</a> / <a href='./'>JS</a></span>
		 &#171; (<a href="https://github.com/askmike/visitekaartjes">code</a>)
    </header>
    <div id="main" role="main">
	
	<?php if(!isset($_POST['submit'])) { ?>
	
		<div class='kaartje'>
			<form method='post'>
				<input name='naam' placeholder='naam' />
				<input name='beroep' placeholder='beroep' />
				<input type="submit" value="maak" name="submit" />
			</form>
		</div>
		<?php } else { 
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
							<?php echo $_POST['naam']; ?>
							<span>
								<?php echo $_POST['beroep']; ?>
							</span>
						</div>
					</div>
				</div>
			<?php }
		} ?>
		
		<!--
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
					Mike van Rossum
					<span>
						webdesigner
					</span>
				</div>
			</div>
		</div> -->
    </div>
    <footer>

    </footer>
  </div> <!--! end of #container -->


  <!-- JavaScript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.6.2.min.js"><\/script>')</script>


  <!-- scripts concatenated and minified via ant build script-->
  <script defer src="js/plugins.js"></script>
  <script defer src="js/script.js"></script>
  <!-- end scripts-->

	
  <!-- Change UA-XXXXX-X to be your site's ID -->
  <script>
    var _gaq=[['_setAccount','UA-19313599-x'],['_trackPageview'],['_trackPageLoadTime']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>


  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->
  
</body>
</html>
