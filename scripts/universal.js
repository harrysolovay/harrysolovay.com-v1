'use strict';





// enables css active state effects on mobile
$('a, input, textarea').on('touchstart', function(e) {
    e.stopPropogation();
}).on('touchend', function(e) {
	e.stopPropogation();
});





// detailing
function detailing() {
    // give element after header a top margin equal to the height of the header
    if($(window).width() > 600) {
    	$('header + *').css('margin-top', '55px');
    } else if($(window).width() <= 601) {
    	$('header + *').css('margin-top', '83px');
    }
    $('#item-viewer').css({
    	'top' : $('header').outerHeight(),
    	'height' : $(window).height() - $('header').height()
    });
}





$(function() {

	applyInnerTextShadow({

		'.inner-section > span' : {
			'background-color' : '#565656',
			'text-shadow' : '0px 2px 3px rgba(255, 255, 255, 0.5)'
		},

	    '.inner-section > p' : {
	    	'background-color' : '#565656',
	    	'text-shadow' : '0px 1px 1px rgba(255, 255, 255, 0.5)'
	    }

	});

	detailing();

	$('.inner-section').animate({
		opacity : 1
	}, 750);

});





$(window).resize(function() {
	detailing();
});





// called on orientation change
$(window).on('orientationchange', function() {
    detailing();
});
