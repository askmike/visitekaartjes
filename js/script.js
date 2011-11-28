/* Author: Mike van Rossum */
$(function(){
	$('.result').each(function(){
		for (i=0;i<=10;i++) {
			$('.klaar').eq(10-i).delay(i*500).slideDown(500);
		}
	})
});




















