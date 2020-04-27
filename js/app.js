//Initalizing the Typewriter effect
// import Typewriter from 'typewriter-effect/dist/core';
//var typespace = document.getElementsById('');
// import Typed from 'typed.js';
var options = {
    stringsElement: '#landing__ticker__pool',
    smartBackspace: true,
    typeSpeed: 80,
    showCursor: false,
    backSpeed: 40,
    backDelay: 1200,
    startDelay: 500,
    loop: true,
};

// Google Analytics
window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
ga('create', 'UA-31913096-19', 'auto');

// Replace the following lines with the plugins you want to use.
ga('require', 'eventTracker');
ga('require', 'outboundLinkTracker');
ga('require', 'urlChangeTracker');


// Gave up writing vanilla and went with jQuery
$(document).ready(function() {
    $('.header__navigation__button').on('click', function(e){
        e.preventDefault();
        $('.header__navigation__mobile, .header__navigation__bars, .header__navigation__button').toggleClass('is-active')
    });

    if (typeof Typed == 'function') {
      var typed = new Typed('.landing__ticker__slot', options);
    }



    //* Smooth Scrolling for all anchor links.
    // https://css-tricks.com/snippets/jquery/smooth-scrolling/

    // Select all links with hashes
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
              var $target = $(target);
              $target.focus();
              if ($target.is(":focus")) { // Checking if the target was focused
                return false;
              } else {
                $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                $target.focus(); // Set focus again
              };
            });
          }
        }
    });

});
