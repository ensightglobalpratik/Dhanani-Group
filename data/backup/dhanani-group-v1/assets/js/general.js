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

	$("#historyTab").easyResponsiveTabs({
	    type: 'default', //Types: default, vertical, accordion           
	    width: 'auto', //auto or any custom width
	    fit: true,   // 100% fits in a container
	    closed: false, // Close the panels on start, the options 'accordion' and 'tabs' keep them closed in there respective view types
	    activate: function() {},  // Callback function, gets called if tab is switched
	    tabidentify: 'tab_identifier_child', // The tab groups identifier *This should be a unique name for each tab group and should not be defined in any styling or css file.
	    activetab_bg: '#B5AC5F', // background color for active tabs in this group
	    inactive_bg: '#E0D78C', // background color for inactive tabs in this group
	    active_border_color: '#9C905C', // border color for active tabs heads in this group
	    active_content_border_color: '#9C905C' // border color for active tabs contect in this group so that it matches the tab head border
	});

	AOS.init({
	  // Global settings:
	  disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
	  startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
	  initClassName: 'aos-init', // class applied after initialization
	  animatedClassName: 'aos-animate', // class applied on animation
	  useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
	  disableMutationObserver: false, // disables automatic mutations' detections (advanced)
	  debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
	  throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)
	  

	  // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
	  offset: 120, // offset (in px) from the original trigger point
	  delay: 200, // values from 0 to 3000, with step 50ms
	  duration: 1000, // values from 0 to 3000, with step 50ms
	  easing: 'ease', // default easing for AOS animations
	  once: false, // whether animation should happen only once - while scrolling down
	  mirror: false, // whether elements should animate out while scrolling past them
	  anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

	});

});


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
});


