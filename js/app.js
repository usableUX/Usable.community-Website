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
