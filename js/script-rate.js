
$(".gray-block").click( function() {
    if($(this).hasClass("on")) {
        $(this).removeClass("on");
        $(this).css({
            "background-color": "#d0d2d3",
        });
        $(this).closest(".categ-wrapper").find(".white-block").css({
            "float": "left",
        });
        $(this).closest(".categ-wrapper").find(".categ").css({
            "color": "#d0d2d3",
        });
        $(this).closest(".categ-wrapper").find(".toggle-name").css({
            "color": "#d0d2d3",
        });
    } else {
        $(this).addClass("on");
        $(this).css({
            "background-color": "#bb2028",
        });
        $(this).closest(".categ-wrapper").find(".white-block").css({
            "float": "right",
        });
        $(this).closest(".categ-wrapper").find(".categ").css({
            "color": "#bb2028",
        });
        $(this).closest(".categ-wrapper").find(".toggle-name").css({
            "color": "#bb2028",
        });

    }
    /* $(this:before).css({
         "background-color": "black"
     })*/
});

/*$("#first").click( function() {
    $(".rating-wrapper").animate({
        scrollTop: 0
    }, 500)
});
$("#second").click( function() {
    $(".rating-wrapper").animate({
        scrollTop: 825
    }, 500)
});
$("#third").click( function() {
    $(".rating-wrapper").animate({
        scrollTop: 1650
    }, 500)
});
$("#fourth").click( function() {
    $(".rating-wrapper").animate({
        scrollTop: 2475
    }, 500)
});
$("#fifth").click( function() {
    $(".rating-wrapper").animate({
        scrollTop: 3300
    }, 500)
});
$("#sixth").click( function() {
    $(".rating-wrapper").animate({
        scrollTop: 4125
    }, 500)
});
$("#seventh").click( function() {
    $(".rating-wrapper").animate({
        scrollTop: 4950
    }, 500)
});
$("#eighth").click( function() {
    $(".rating-wrapper").animate({
        scrollTop: 5775
    }, 500)
});
$("#ninth").click( function() {
    $(".rating-wrapper").animate({
        scrollTop: 6800
    }, 500)
});
$("#tenth").click( function() {
    $(".rating-wrapper").animate({
        scrollTop: 7625
    }, 500)
});*/

$('#example-1').selectivity({
    allowClear: true,
    items: ['Легкая промышленность', 'Тяжелая промышленность',
        'Информационные технологии', 'Пищевая промышленность',
        'Ядерная энергетика'],
    placeholder: 'Введите отрасль'
});
