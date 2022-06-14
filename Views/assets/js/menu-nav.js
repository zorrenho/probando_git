$(document).ready(function () {
    var altura = $('.bar-menu').offset().top + 100;

    $(window).on('scroll', function () {
        if ($(window).scrollTop() > altura) {
            $('.bar-menu').addClass('menu-fixed');
        } else {
            $('.bar-menu').removeClass('menu-fixed');
        }
    });
});