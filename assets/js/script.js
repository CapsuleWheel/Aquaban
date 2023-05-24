$(document).ready(function () {
    $('.header__burger').click(function (event) {
        $('.header__burger, .menu').toggleClass('active');
        $('body').toggleClass('lock');
    })
    $('.menu__link').click(function (event) {
        $('.header__burger, .menu').removeClass('active');
        $('body').removeClass('lock');
    })
    $('._btn-popup').click(function (event) {
        $('body').removeClass('lock');
    })
})