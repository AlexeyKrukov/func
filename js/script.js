
//SLIDER
$(function(){
    $(".slider").slick({
        asNavFor: '.slider-nav',
        dots: true,
        arrows: false,
    });
    $('.slider-nav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.slider',
        centerMode: true,
        focusOnSelect: true
    });
});


