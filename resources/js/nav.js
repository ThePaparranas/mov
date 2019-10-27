var pageClass = document.getElementById('app').className
var menuClass = '.' + pageClass + '.top-menu'

$(document).ready(function(){

    $(pageClass).find('.top-menu').css('background', 'linear-gradient(to bottom,  rgba(0,0,0,.75) 1%,rgba(0,0,0,0.01) 99%,rgba(255,255,255,0) 100%)').css('color', '#000');
    $(pageClass).find('.top-menu').find('li').find('a').css({color: '#fff', textShadow: '0 1px 2px rgba(0,0,0,.6)'});
    $(menuClass).find('.menu-left').find('li').find('a').mouseover(function() {
        $(this).css('color', '#428bca')
    });
    $(menuClass).find('.menu-left').find('li').find('a').mouseout(function() {
        $(this).css('color', '#fff')
    });
    $('.menu-right').css('color', '#fff');
})
$(window).scroll(function() {
    var scroll = $(window).scrollTop();

    if (scroll >= 55) {
        console.log(menuClass)

        $(menuClass).css('background', '#fff');
        $(menuClass).find('.menu-left').find('li').find('a').css({color: '#666', textShadow: 'none'});
        $(menuClass).find('.menu-left').find('li').find('a').mouseover(function() {
            $(this).css('color', '#428bca')
        });
        $(menuClass).find('.menu-left').find('li').find('a').mouseout(function() {
            $(this).css('color', '#666')
        });
        $('.menu-right').css('color', '#666');
    } else {
        $(menuClass).css('background', 'linear-gradient(to bottom,  rgba(0,0,0,.75) 1%,rgba(0,0,0,0.01) 99%,rgba(255,255,255,0) 100%)');
        $(menuClass).find('.menu-left').find('li').find('a').css('color', '#fff');
        $(menuClass).find('.menu-left').find('li').find('a').mouseover(function() {
            $(this).css('color', '#428bca')
        });
        $(menuClass).find('.menu-left').find('li').find('a').mouseout(function() {
            $(this).css('color', '#fff')
        });
        $('.menu-right').css('color', '#fff');

    }
});

