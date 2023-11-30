(function ($) {
  "use strict"

  /* 1. Preloder (готовый код, можно использовать в любом проекте) */
  $(window).on('load', function () {
    $('#preloader-active').delay(450).fadeOut('slow');
    $('body').delay(450).css({
      'overflow': 'visible'
    });
  });

  /* 2. Sticky And Scroll UP */
  $(window).on('scroll', function () {
    var scroll = $(window).scrollTop();
    if (scroll < 400) {
      $(".header-sticky").removeClass("sticky-bar");
      $('#back-top').fadeOut(500);
    } else {
      $(".header-sticky").addClass("sticky-bar");
      $('#back-top').fadeIn(500);
    }
  });

  // Scroll Up
  $('#back-top a').on("click", function () {
    $('body,html').animate({
      scrollTop: 0
    }, 800);
    return false;
  });


})(jQuery);


//Parallax

$(document).ready(function () {
  var scene = document.getElementById('scene');
  var parallaxInstance = new Parallax(scene);
});

//Tabs

$(document).ready(function () {
  $(".nav-item").click(function (e) {
    e.preventDefault(); // Предотвращаем стандартное поведение ссылки

    $(".nav-item").removeClass("active"); // Удаляем класс 'active' со всех вкладок
    $(this).addClass("active"); // Добавляем класс 'active' к нажатой вкладке

    // Скроллим к контейнеру с id='nav-tabContent'
    if ($("#nav-tabContent").length) {
      $('html, body').animate({
        scrollTop: $("#nav-tabContent").offset().top
      }, 1000);
    }
  });
});
