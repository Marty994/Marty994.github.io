function include(scriptUrl) {
    document.write('<script src="' + scriptUrl + '"></script>');
}

function isIE() {
    var myNav = navigator.userAgent.toLowerCase();
    return (myNav.indexOf('msie') != -1) ? parseInt(myNav.split('msie')[1]) : false;
};

/* cookie.JS
 ========================================================*/
include('js/jquery.cookie.js');

/* Easing library
 ========================================================*/
include('js/jquery.easing.1.3.js');

/* PointerEvents
 ========================================================*/
;
(function ($) {
    if(isIE() && isIE() < 11){
        include('js/pointer-events.js');
        $('html').addClass('lt-ie11');
        $(document).ready(function(){
            PointerEventsPolyfill.initialize({});
        });
    }
})(jQuery);

/* EqualHeights
 ========================================================*/
;
(function ($) {
    var o = $('[data-equal-group]');
    if (o.length > 0) {
        include('js/jquery.equalheights.js');
    }
})(jQuery); 

/* WOW
 ========================================================*/
;
(function ($) {
    var o = $('html');

    if ((navigator.userAgent.toLowerCase().indexOf('msie') == -1 ) || (isIE() && isIE() > 9)) {
        if (o.hasClass('desktop')) {
            include('js/wow.js');

            $(document).ready(function () {
                new WOW().init();
            });
        }
    }
})(jQuery);


/* Type write
 ========================================================*/

$(function(){
        $(".element").typed({
            strings: ["Hello","Welcome to my portfolio <br> <strong>It's Nice To Meet You<strong>"],
            typeSpeed: 0
        });
    });

/* Radial progress bar
 ========================================================*/

$('.circle1').circleProgress({
    value: 1,
    size: 175,
    
}).on('circle-animation-progress', function(event, progress) {
    $(this).find('strong').html(parseInt(100 * progress) + '<i>%</i>');
});

$('.circle2').circleProgress({
        value: 0.90,
        size: 175,
        
    }).on('circle-animation-progress', function(event, progress) {
    $(this).find('strong').html(parseInt(95 * progress) + '<i>%</i>');
});

$('.circle3').circleProgress({
        value: 0.50,
        size: 175,
        
    }).on('circle-animation-progress', function(event, progress) {
    $(this).find('strong').html(parseInt(55 * progress) + '<i>%</i>');
});

$('.circle4').circleProgress({
        value: 0.30,
        size: 175,
        
    }).on('circle-animation-progress', function(event, progress) {
    $(this).find('strong').html(parseInt(25 * progress) + '<i>%</i>');
});

/* Parallax 
=============================================*/ 
;(function ($) { 
    include('js/jquery.rd-parallax.js'); 
})(jQuery);

/* One page nav
=============================================*/ 

var sections = $('section')
  , nav = $('nav')
  , nav_height = nav.outerHeight();

$(window).on('scroll', function () {
  var cur_pos = $(this).scrollTop();
  
  sections.each(function() {
    var top = $(this).offset().top - nav_height,
        bottom = top + $(this).outerHeight();
    
    if (cur_pos >= top && cur_pos <= bottom) {
      nav.find('a').removeClass('active');
      sections.removeClass('active');
      
      $(this).addClass('active');
      nav.find('a[href="#'+$(this).attr('id')+'"]').addClass('active');
    }
  });
});

nav.find('a').on('click', function () {
  var $el = $(this)
    , id = $el.attr('href');
  
  $('html, body').animate({
    scrollTop: $(id).offset().top - nav_height
  }, 500);
  
  return false;
});

/* Copyright Year
 ========================================================*/

(function ($) {
    var currentYear = (new Date).getFullYear();
    $(document).ready(function () {
        $("#copyright-year").text((new Date).getFullYear());
    });
})(jQuery);

/* Smooth Scrolling
=============================================*/ 




