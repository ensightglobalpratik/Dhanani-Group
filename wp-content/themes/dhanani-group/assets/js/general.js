// JavaScript Document
var $ = jQuery.noConflict();

// =================================
// Add class while scrolling
// =================================
(function ( $ ) {
	/**
	 * Tests if a node is positioned within the current viewport.
	 * It does not test any other type of "visibility", like css display,
	 * opacity, presence in the dom, etc - it only considers position.
	 *
	 * By default, it tests if at least 1 pixel is showing, regardless of
	 * orientation - however an optional argument is accepted, a callback
	 * that is passed the number of pixels distant between each edge of the
	 * node and the corresponding viewport.  If the callback argument is provided
	 * the return value (true of false) of that callback is used instead.
	 */
	$.fn.isOnScreen = function ( test ) {
		var height = this.outerHeight();
		var width = this.outerWidth();

		if ( !width || !height ) {
			return false;
		}

		var win = $( window );

		var viewport = {
			top: win.scrollTop(),
			left: win.scrollLeft()
		};
		viewport.right = viewport.left + win.outerWidth();
		viewport.bottom = viewport.top + win.outerHeight() / 1.5;

		var bounds = this.offset();
		bounds.right = bounds.left + width;
		bounds.bottom = bounds.top + height;

		var deltas = {
			top: viewport.bottom - bounds.top,
			left: viewport.right - bounds.left,
			bottom: bounds.bottom - viewport.top,
			right: bounds.right - viewport.left
		};

		if ( typeof test == 'function' ) {
			return test.call( this, deltas );
		}

		return deltas.top > 0 && deltas.left > 0 && deltas.right > 0 && deltas.bottom > 0;
	};
})( jQuery );

function animated() {
	$( '.animation_fadeInUp' ).each( function () {
		if ( $( this ).isOnScreen() ) {
			$( this ).addClass( 'onView' );
			var _child = $( this ).find( '.animated' );
			if ( _child.length ) {
				$( function () {
					var el = _child;
					var index = 0;
					var timer = window.setInterval( function () {
						if ( index < el.length ) {
							el.eq( index++ ).addClass( 'fadeInUp' );
						} else {
							window.clearInterval( timer );
						}
					}, 200 );
				} );
			}
		}
	} );
	$( '.animation_fade_in' ).each( function () {
		if ( $( this ).isOnScreen() ) {
			$( this ).addClass( 'onView' );
			var _child = $( this ).find( '.animated' );
			if ( _child.length ) {
				$( function () {
					var el = _child;
					var index = 0;
					var timer = window.setInterval( function () {
						if ( index < el.length ) {
							el.eq( index++ ).addClass( 'fadeIn' );
						} else {
							window.clearInterval( timer );
						}
					}, 200 );
				} );
			}
		}
	} );	
}

$( window ).scroll( function () {
	animated();
});

animated();

$( document ).ready( function () {	
	
	// Case Studies Slider
	/*$( '.bannerslider' ).owlCarousel( {
		loop: true,
		nav: false,		
		dots: false,
		items: 1,
		autoplay: true,
		autoplayTimeout:5000,
		animateOut: 'fadeOut',
		autoHeight: true,
		animateOut: 'fadeOut',
		smartSpeed: 450		
	} );*/

	setTimeout(function(){
		$('body').addClass('site_loaded');
	}, 1000);

	// For Menu
	$('.enumenu_ul').responsiveMenu({
		menuslide_overlap: true,
		menuslide_direction: 'right',
		onMenuopen: function() {}
	});	
	
	$('.closeIcon').click(function(){
		$('.quickform').removeClass('active');
	});

	$('.fixedBtn').click(function(){
		$('.quickform').addClass('active');
	});	

} );


$( window ).scroll( function () {
	//$( '.menu-icon' ).removeClass( 'active' );
	//$( 'body' ).removeClass( 'menu-open' );

	var mainHeight = $( 'header.site-header' ).outerHeight();
	//alert(mainHeight);
	var winTop = $( window ).scrollTop();
	if ( winTop >= mainHeight ) {
		$( 'body' ).addClass( 'fixed_header' );
	} else {
		$( 'body' ).removeClass( 'fixed_header' );
	}
} );


