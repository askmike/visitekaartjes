/* Author: Mike van Rossum */
$(function(){
	//PHP (only result)
	$('.result').each(animate());
	//ajax
	$('.ajax').each(function(){
		$('form').submit(function(e) {
			//stop the form from being sent
			e.preventDefault();
			//grab the input
			naam = $('#naam').val();
			beroep = $('#beroep').val();
			//check if everything is filled
			if (beroep && naam) {
				//do a request and POST the vars
				$.getJSON('http://localhost/sss/2/visitekaartjes/json?naam=' + naam + '&beroep=' + beroep,
				function(data) {
					for(i = 0; i < 10; i++) {
						$('.kaartje.template').clone().removeClass('template').addClass('klaar').appendTo('#container');
					}
					$('.kaartje.klaar').find('.rotate').prepend(data.naam).find('span').append(data.beroep);
					animate();
				});
			}
		});
	});
	//javascript
	$('.js').each(function(){
			$('form').submit(function(e) {
				//stop the form from being sent
				e.preventDefault();
				//grab the input
				naam = $('#naam').val();
				beroep = $('#beroep').val();
				//check if everything is filled
				if (beroep && naam) {
					for(i = 0; i < 10; i++) {
						$('.kaartje.template').clone().removeClass('template').addClass('klaar').appendTo('#container');
					}
					$('.kaartje.klaar').find('.rotate').prepend(naam).find('span').append(beroep);
					animate();
				}
			});
	});
	
	function animate() {
		count = $('.klaar').size() - 1;
		$('.klaar').not('#template').each(function(i) {
			$(this).delay((count-i)*500).slideDown(500);
		});
	}
});

/* analytics */

var _gaq=[['_setAccount','UA-19313599-6'],['_trackPageview'],['_trackPageLoadTime']];
(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
s.parentNode.insertBefore(g,s)}(document,'script'));