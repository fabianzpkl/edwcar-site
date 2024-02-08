$(document).ready(function () {
  //Slidenav Menu//
  $(".sidenav").sidenav();

  //Modal//
  $(".modal").modal();

  //Slider Home//
  /*$('.sliderprimario').bxSlider({
        controls: false,
        auto: true,
        adaptiveHeight: true,
        responsive: true,
    });*/

  $(".sliderslick").slick({
    adaptiveHeight: true,
    dots: true,
    speed: 300,
    autoplay: true,
    autoplaySpeed: 7000,
    appendArrows: false,
  });
  //Testimoniales//
  $(".review-comments").bxSlider({
    auto: true,
    minSlides: 3,
    maxSlides: 3,
    controls: false,
    pager: false,
    adaptiveHeight: true,
    responsive: true,
  });
  //Acordeones//
  $(".collapsible").collapsible();
  //Tabs//
  $(".tabs").tabs();
});
