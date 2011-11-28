/* Author: Mike van Rossum */
$(function(){
	if(result) { //deze var halen we uit index, hij wordt geset door PHP
		count = $('.klaar').size();
		$('.klaar').each(function(i) {
			$(this).delay((count-i)*500).slideDown(500);
		});
	}
});