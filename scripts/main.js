$(document).ready(function () {

    //Slidenav Menu//
    $('.sidenav').sidenav();

    //Modal//
    $('.modal').modal();

    //Slider Home//
    $('.sliderprimario').bxSlider({
        controls: false,
        auto: true,
        adaptiveHeight: true,
        responsive: true,
    });
    //Testimoniales//
    $('.review-comments').bxSlider({
        auto: true,
        minSlides: 3,
        maxSlides: 3,
        controls: false,
        pager: false,
        adaptiveHeight: true,
        responsive: true,
    });
    //Acordeones//
    $('.collapsible').collapsible();
    //Tabs//
    $('.tabs').tabs();
});