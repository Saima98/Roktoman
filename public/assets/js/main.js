//one page nave
$('#nav').onePageNav({
	currentClass: 'current',
	changeHash: false,
	scrollSpeed: 750,
	scrollThreshold: 0.5,
	filter: '',
	easing: 'swing'
});
//counter up
jQuery(document).ready(function($) {
		$('.counter').counterUp({
			delay: 10,
			time: 1000
		});
	});
//active header
$(window).scroll(function() {    
	var scroll = $(window).scrollTop();

	if (scroll >= 1) {
		$(".header_area").addClass("header_area2");
	} else {
		$(".header_area").removeClass("header_area2");
	}
});
