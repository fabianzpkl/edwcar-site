$(document).ready(function () {
  //Slidenav Menu//
  $(".sidenav").sidenav();

  //Modal//
  $(".modal").modal();

  $(".sliderslick").slick({
    adaptiveHeight: true,
    dots: true,
    speed: 300,
    autoplay: true,
    autoplaySpeed: 7000,
    appendArrows: false,
  });
  //Testimoniales//
  $(".review-comments").slick({
    adaptiveHeight: true,
    dots: true,
    speed: 300,
    autoplay: true,
    autoplaySpeed: 7000,
    appendArrows: false,
    arrows: false,
    dots: false,
  });
  //Acordeones//
  $(".collapsible").collapsible();
  //Tabs//
  $(".tabs").tabs();
});
