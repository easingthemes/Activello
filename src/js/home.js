import 'flexslider';

// Slider functions
// Can also be used with $(document).ready()
jQuery(document).ready(function( $ ) {
	$(window).load(function() {
		if ( 0 !== $( '.flexslider' ).length ) {
			$( '.flexslider' ).flexslider({
				animation: 'fade',
				easing: 'swing',
				direction: 'horizontal',
				reverse: false,
				animationLoop: true,
				smoothHeight: true,
				startAt: 0,
				slideshow: true,
				slideshowSpeed: 7000,
				animationSpeed: 600,
				initDelay: 0,
				randomize: false,
				fadeFirstSlide: true,
				pauseOnAction: true,
				pauseOnHover: false,
				pauseInvisible: true,
				useCSS: true,
				touch: true,
				directionNav: true,
				prevText: '',
				nextText: ''
			});
		}
	});
});
