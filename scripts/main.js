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