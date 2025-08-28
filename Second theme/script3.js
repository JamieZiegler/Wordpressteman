    jQuery(document).ready(function($) {

        var headerHeight = $('header').outerHeight();
        var nav = $('nav');

        $(window).scroll(function() {
            if ($(window).scrollTop() > headerHeight) {
                nav.addClass('sticky');
            } else {
                nav.removeClass('sticky');
            }
        });
    });

