/* Author: Mike van Rossum */
$(function(){
	//PHP (only result)
	$('.result').each(animate());
	//ajax
	$('.ajax').each(function(){
		processForm(function(){
			$.getJSON(window.location.href + '/../json?naam=' + naam + '&beroep=' + beroep,
			function(data) {
				insertCards(data.naam, data.beroep);
			});
		});
	});
	//javascript
	$('.js').each(function(){
			processForm(function() {
				insertCards(naam, beroep);
			}); 

	});
	
	function processForm(callback) {
		$('form').submit(function(e) {
			//stop the form from being sent
			e.preventDefault();
			//grab the input
			naam = $('#naam').val();
			beroep = $('#beroep').val();
			//check if everything is filled
			if(naam && beroep) {
				callback();
			}
		});
	}
	
	function animate() {
		count = $('.klaar').size() - 1;
		$('.klaar').not('#template').each(function(i) {
			$(this).delay((count-i)*500).slideDown(500);
		});
	}
	
	function insertCards(naam, beroep) {
		for(i = 0; i < 10; i++) {
			$('.kaartje.template').clone().removeClass('template').addClass('klaar').appendTo('#container');
		}
		$('.kaartje.klaar').find('.rotate').prepend(naam).find('span').append(beroep);
		animate();
	}
});

/* analytics */

var _gaq=[['_setAccount','UA-19313599-6'],['_trackPageview'],['_trackPageLoadTime']];
(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
s.parentNode.insertBefore(g,s)}(document,'script'));