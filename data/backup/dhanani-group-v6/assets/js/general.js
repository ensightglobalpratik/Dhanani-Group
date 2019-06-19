// JavaScript Document
var $ = jQuery.noConflict();
var mapstyle;
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
	$(".bio_list .bio_col").bind("touchstart click",function () {
		var addressValue = $(this).attr("href");
	    	mainHeight = $( 'header.site-header' ).outerHeight();
	    $(this).parents('.bio_sec').find(addressValue).addClass('active');
	    $(this).parents('.bio_sec').find(addressValue).siblings().removeClass("active");
	    console.log(this);
	    $(".active_bio_row.active .active_bio_content").children().not(".next_link").remove();
	    $(this).find(".bio_content").children().clone().prependTo(".active_bio_row.active .active_bio_content");
	    $('html, body').animate({
	        scrollTop: $( $.attr(this, 'href') ).offset().top - mainHeight
	    }, 1000);
	    return false;
	});
	var parentAttr,mainHeight;
	$('.next_link').bind("touchstart click",function () {
		parentAttr=$(this).parents(".active_bio_row").attr("id");
	    mainHeight = $( 'header.site-header' ).outerHeight();
		$(".bio_list").children().each((i,el)=>{
			var getid=$(el).attr('href').replace("#","");
			console.log(getid);
			if(getid===parentAttr){
				console.log($(el));
				$('html, body').animate({
	    		    scrollTop: $("#"+getid).offset().top - mainHeight
	  		  }, 1000);
			}
		})
		/*$(this).parents('.active_bio_row').removeClass("active");
		$(this).parents('.active_bio_row').next('.active_bio_row').addClass('active');

		mainHeight = $( 'header.site-header' ).outerHeight();
		$('html, body').animate({
	        scrollTop: $( $.attr(this, 'href') ).offset().top - mainHeight
	    }, 1000);
	    return false;*/
	});

	// Case Studies Slider
	$( '.bannerslider' ).owlCarousel( {
		loop: true,
		nav: true,		
		dots: true,
		items: 1,
		autoplay: true,
		autoplayTimeout:5000,
		animateOut: 'fadeOut',
		autoHeight: true,
		animateOut: 'fadeOut',
		smartSpeed: 450		
	} );

	// Testimonials Slider
	$('.testimonial_slider').owlCarousel( {
		loop: true,
		nav: true,		
		dots: false,
		items: 3,
		//autoplay: true,
		margin:37,
		autoplayTimeout:5000,
		autoHeight: true,
		animateOut: 'fadeOut',
		smartSpeed: 450		
	});



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

	// Tabs
	setTimeout(()=>{
			mapstyle=$(".resp-tab-content-active .mapplic-map").attr("style");
			//console.log(mapstyle);
	},2000);
	$("#historyTab").easyResponsiveTabs({
	    type: 'default', //Types: default, vertical, accordion           
	    width: 'auto', //auto or any custom width
	    fit: true,   // 100% fits in a container
	    closed: false, // Close the panels on start, the options 'accordion' and 'tabs' keep them closed in there respective view types
	    activate: function() {console.log(mapstyle);$(".resp-tab-content-active .mapplic-map").attr("style","");
	    $(".resp-tab-content-active .mapplic-map").attr("style",mapstyle)},  // Callback function, gets called if tab is switched
	    tabidentify: 'tab_identifier_child', // The tab groups identifier *This should be a unique name for each tab group and should not be defined in any styling or css file.
	    activetab_bg: '#B5AC5F', // background color for active tabs in this group
	    inactive_bg: '#E0D78C', // background color for inactive tabs in this group
	    active_border_color: '#9C905C', // border color for active tabs heads in this group
	    active_content_border_color: '#9C905C' // border color for active tabs contect in this group so that it matches the tab head border
	});
	
	// Animation
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

	// Less - more 
	var showChar = 80;
	var ellipsestext = "...";
	var moretext = "";
	var lesstext = "";
	$('.moretext').each(function() {
		var content = $(this).html();

		if(content.length > showChar) {

			var c = content.substr(0, showChar);
			var h = content.substr(showChar-1, content.length - showChar);

			var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';

			$(this).html(html);
		}

	});

	$(".morelink").click(function(){
		if($(this).hasClass("less")) {
			$(this).removeClass("less");
			$(this).html(moretext);
		} else {
			$(this).addClass("less");
			$(this).html(lesstext);
		}
		$(this).parent().prev().toggle();
		$(this).prev().toggle();
		return false;
	});

	// Counter Script
	addToAnimateClass();
	addToAnimateClass2();
	addToAnimateClass3();

});

// Header Fixed
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

function addToAnimateClass() {
	var first = $('span#1-counter').attr('data-startVal', 0);
	$('#1-counter').each(function () {
		// no need to specify options unless they differ from the defaults
		var target = this;
		var endVal = parseInt($(this).attr('data-endVal'));
		var startVal = parseInt($(this).attr('data-startVal'));
		var theAnimation = new countUp(target, startVal, endVal, 0, 3);
		theAnimation.start();
	});
}

function addToAnimateClass2() {
	var second = $('span#2-counter').attr('data-startVal', 0);
	$('#2-counter').each(function () {
		// no need to specify options unless they differ from the defaults
		var target = this;
		var endVal = parseInt($(this).attr('data-endVal'));
		var startVal = parseInt($(this).attr('data-startVal'));
		var theAnimation = new countUp(target, startVal, endVal, 0, 3);
		theAnimation.start();
	});
}

function addToAnimateClass3() {
	var third = $('span#3-counter').attr('data-startVal', 0);
	$('#3-counter').each(function () {
		// no need to specify options unless they differ from the defaults
		var target = this;
		var endVal = parseInt($(this).attr('data-endVal'));
		var startVal = parseInt($(this).attr('data-startVal'));
		var theAnimation = new countUp(target, startVal, endVal, 0, 3);
		theAnimation.start();
	});
}

// Counter JS
$('.numbers-round .counter').each(function () {
	var price_ = $(this).text().replace(/\B(?=(\d{3})+(?!\d))/g, ',');
	$(this).html(price_);
});

$(window).on('scroll.myEvent', function () {
	if ($('.number_scroll').length) {
		if ($(window).scrollTop() + $(window).height() / 1.5 > $('.number_scroll').offset().top) {
			addToAnimateClass();
			addToAnimateClass2();
			addToAnimateClass3();
			$(window).off('scroll.myEvent');
		}
	}
});

// countUp.min.js
function countUp(a, b, c, d, e, f) {
	this.options = f || {
		useEasing: !0,
		useGrouping: !0,
		separator: ',',
		decimal: '.'
	};
	for (var g = 0, h = ['webkit', 'moz', 'ms'], i = 0; i < h.length && !window.requestAnimationFrame; ++i) window.requestAnimationFrame = window[h[i] + 'RequestAnimationFrame'], window.cancelAnimationFrame = window[h[i] + 'CancelAnimationFrame'] || window[h[i] + 'CancelRequestAnimationFrame'];
	window.requestAnimationFrame || (window.requestAnimationFrame = function (a) {
		var c = (new Date).getTime(),
			d = Math.max(0, 16 - (c - g)),
			e = window.setTimeout(function () {
				a(c + d);
			}, d);
		return g = c + d, e;
	}), window.cancelAnimationFrame || (window.cancelAnimationFrame = function (a) {
		clearTimeout(a);
	});
	var j = this;
	this.d = 'string' == typeof a ? document.getElementById(a) : a, this.startVal = Number(b), this.endVal = Number(c), this.countDown = this.startVal > this.endVal ? !0 : !1, this.startTime = null, this.timestamp = null, this.remaining = null, this.frameVal = this.startVal, this.rAF = null, this.decimals = Math.max(0, d || 0), this.dec = Math.pow(10, this.decimals), this.duration = 1e3 * e || 2e3, this.easeOutExpo = function (a, b, c, d) {
		return 1024 * c * (-Math.pow(2, -10 * a / d) + 1) / 1023 + b;
	}, this.count = function (a) {
		null === j.startTime && (j.startTime = a), j.timestamp = a;
		var b = a - j.startTime;
		if (j.remaining = j.duration - b, j.options.useEasing)
			if (j.countDown) {
				var c = j.easeOutExpo(b, 0, j.startVal - j.endVal, j.duration);
				j.frameVal = j.startVal - c;
			} else j.frameVal = j.easeOutExpo(b, j.startVal, j.endVal - j.startVal, j.duration);
		else if (j.countDown) {
			var c = (j.startVal - j.endVal) * (b / j.duration);
			j.frameVal = j.startVal - c;
		} else j.frameVal = j.startVal + (j.endVal - j.startVal) * (b / j.duration);
		j.frameVal = Math.round(j.frameVal * j.dec) / j.dec, j.frameVal = j.countDown ? j.frameVal < j.endVal ? j.endVal : j.frameVal : j.frameVal > j.endVal ? j.endVal : j.frameVal, j.d.innerHTML = j.formatNumber(j.frameVal.toFixed(j.decimals)), b < j.duration ? j.rAF = requestAnimationFrame(j.count) : null != j.callback && j.callback();
	}, this.start = function (a) {
		return j.callback = a, isNaN(j.endVal) || isNaN(j.startVal) ? (console.log('countUp error: startVal or endVal is not a number'), j.d.innerHTML = '--') : j.rAF = requestAnimationFrame(j.count), !1;
	}, this.stop = function () {
		cancelAnimationFrame(j.rAF);
	}, this.reset = function () {
		j.startTime = null, cancelAnimationFrame(j.rAF), j.d.innerHTML = j.formatNumber(j.startVal.toFixed(j.decimals));
	}, this.resume = function () {
		j.startTime = null, j.duration = j.remaining, j.startVal = j.frameVal, requestAnimationFrame(j.count);
	}, this.formatNumber = function (a) {
		a += '';
		var b, c, d, e;
		if (b = a.split('.'), c = b[0], d = b.length > 1 ? j.options.decimal + b[1] : '', e = /(\d+)(\d{3})/, j.options.useGrouping)
			for (; e.test(c);) c = c.replace(e, '$1' + j.options.separator + '$2');
		return c + d;
	}, j.d.innerHTML = j.formatNumber(j.startVal.toFixed(j.decimals));
}

var options = {
  useEasing: true, 
  useGrouping: true, 
  separator: ',', 
  decimal: '.', 
};
/*            $(this).text(Math.ceil(now));
*/
$(window).on("load",function(){
function countStarter(){    
if($(".counter_col .counter_wrap .counter").length){
  $('.counter_col .counter_wrap .counter').each(function () { 
  	console.log($(this).attr("data-endval"));
    $(this).prop('Counter',0).animate({
        Counter: $(this).attr("data-endval"),
    }, {
        duration: 2000,
        easing: 'swing', 
        step: function (now) {
            $(this).text($(this).attr("data-endval").replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
        },
    });
});
}
}

var flag;
countStarter();


$(window).on("scroll",function(){
    if($(".number_scroll").length){
        if($(window).scrollTop() > $(".number_scroll").offset().top-700 && (typeof flag == "undefined" || !flag)){
            flag=true;
            countStarter();
        }
    }
});	

});




