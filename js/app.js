//Initalizing the Typewriter effect
// import Typewriter from 'typewriter-effect/dist/core';
//var typespace = document.getElementsById('');
// import Typed from 'typed.js';

var options = {
  stringsElement: '#landing__copy__typer_pool',
    typeSpeed: 40,
    backSpeed: 10,
    backDelay: 1200,
    startDelay: 500,
    loop: true,
};

var typed = new Typed('.landing__copy__typer', options);

//Initialize Twitter
window.twttr = (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0],
            t = window.twttr || {};
        if (d.getElementById(id)) return t;
        js = d.createElement(s);
        js.id = id;
        js.src = "https://platform.twitter.com/widgets.js";
        fjs.parentNode.insertBefore(js, fjs);

        t._e = [];
        t.ready = function(f) {
            t._e.push(f);
        };

        return t;
}(document, "script", "twitter-wjs"));

// Google Analytics
window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
ga('create', 'UA-31913096-19', 'auto');

// Replace the following lines with the plugins you want to use.
ga('require', 'eventTracker');
ga('require', 'outboundLinkTracker');
ga('require', 'urlChangeTracker');


/*
    {{Mobile Menu Navigation Toggle}}
*/
//
// document.getElementById('mobileMenu').addEventListener('click', function(e){
//     e.preventDefault();
//
//     var mobileMenu = document.getElementById('mobileMenu');
//     var mobileNavigation = document.getElementById('mobileNavigation');
//     mobileMenu.classList.toggle('is-active');
//     mobileMenu.classList.toggle('is-active');
//
// });

// querySelector returns the first element it finds with the correct selector
// so it needs a unique class name or you're only grabbing one element

// document.querySelector('.header__navigation__button').addEventListener('click', function(e) {
//   [].map.call(document.querySelectorAll('.header__navigation__mobile, .header__navigation__bars, .header__navigation__button'), function(el) {
//
//     el.classList.toggle('is-active');
//   });
//
// });


// Gave up writing vanilla and went with jQuery
$(document).ready(function() {
    $('.header__navigation__button').on('click', function(e){
        e.preventDefault();
        $('.header__navigation__mobile, .header__navigation__bars, .header__navigation__button').toggleClass('is-active')
    });
});
