//opens our mobile nav menu
$(document).delegate('#button-mobile', 'click', function(){
	$('#menu-mobile').toggleClass('open');
	$('#button-mobile').toggleClass('open');
	$('.container').toggleClass('open');
});

//make mobile nav menu open and closing swipe-able.
var pad = document.getElementById("swipe-pad");
$(function() {
	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
 		Hammer(pad).on("swipeleft", function() {
	    	$('#menu-mobile').removeClass("open");
	    });
	    
	    Hammer(pad).on("swiperight", function() {
	    	$('#menu-mobile').addClass("open");
	    });
	};
});
