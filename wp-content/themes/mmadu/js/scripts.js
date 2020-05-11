(function ($, root, undefined) {

	// Google Analytics
	window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
	ga('create', 'UA-31913096-19', 'auto');

	// Replace the following lines with the plugins you want to use.
	ga('require', 'eventTracker');
	ga('require', 'outboundLinkTracker');
	ga('require', 'urlChangeTracker');


	$(function () {
		'use strict';

		// DOM ready, take it away
		$('.header__navigation__button').on('click', function(e){
	        e.preventDefault();
	        $('.header__navigation__mobile, .header__navigation__bars, .header__navigation__button').toggleClass('is-active')
	    });

		$('a[href*="#"]')
	        // Remove links that don't actually link to anything
	        .not('[href="#"]')
	        .not('[href="#0"]')
	        .click(function(event) {
	        // On-page links
	        if (
	          location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
	          &&
	          location.hostname == this.hostname
	        ) {
	          // Figure out element to scroll to
	          var target = $(this.hash);
	          target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
	          // Does a scroll target exist?
	          if (target.length) {
	            // Only prevent default if animation is actually gonna happen
	            event.preventDefault();
	            $('html, body').animate({
	              scrollTop: target.offset().top
	            }, 1000, function() {
	              // Callback after animation
	              // Must change focus!
	              /*
	                Disabled to prevent the focus indicator.
	                var $target = $(target);
	                $target.focus();
	                    if ($target.is(":focus")) { // Checking if the target was focused
	                    return false;
	                } else {
	                    $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
	                    $target.focus(); // Set focus again
	                } */

	            });
	          }
	        }
	    });

	});

})(jQuery, this);
