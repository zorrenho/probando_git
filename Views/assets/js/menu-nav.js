$(document).ready(function(){
    var altura= $('.bar-menu').offset().top + 100;
    
    $(window).on('scroll', function(){
        if($(window).scrollTop() > altura ){
            /*$('.bar-menu').addClass('menu-fixed');*/
            $('.bar-menu').addClass('nav-bar-fixed');
            /* $('.nav-menu').addClass('nav-menu-fixed'); */
        }else{
            /*$('.bar-menu').removeClass('menu-fixed');*/
            $('.bar-menu').removeClass('nav-bar-fixed');
            /* $('.nav-menu').removeClass('nav-menu-fixed'); */

        }
    });
});