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
    e.preventDefault();

    // Удаление класса 'active' у всех элементов .nav-item
    $(".nav-item").removeClass("active");
    // Добавление класса 'active' к текущему элементу
    $(this).addClass("active");

    // Удаление класса 'show' у всех элементов .nav-item
    $(".nav-item").removeClass("show");
    // Добавление класса 'show' к текущему элементу
    $(this).addClass("show");

    // Проверяем наличие элемента с ID 'nav-tabContent'
    if ($("#nav-tabContent").length) {
      // Анимация прокрутки
      $('html, body').animate({
        scrollTop: $("#nav-tabContent").offset().top
      }, 1000);
    }
  });
});

//Swiper

var swiper = new Swiper('.swiper-container', {
  loop: true,
  pagination: {
      el: '.swiper-pagination',
      clickable: true,
  },
  autoplay: {
      delay: 2500,
      disableOnInteraction: false,
  },
});


//Burger-menu
$('.slicknav_btn').click(function (e) {
  e.preventDefault();
  $('.menu-wrapper, .main-menu').toggleClass('active');
});

//Modal-window

$(document).ready(function(){
  $('.header-btn').click(function() {
      $('#bookingModal').show();
  });

  $('.close').click(function() {
      $('#bookingModal').hide();
  });

  $(window).click(function(event) {
      if ($(event.target).is('#bookingModal')) {
          $('#bookingModal').hide();
      }
  });
});

//Validation

$(document).ready(function() {
  $("#formBook").validate({
      rules: {
          name: {
              required: true,
              minlength: 2
          },
          email: {
              required: true,
              email: true
          },
          phone: {
              required: true,
              digits: true,
              minlength: 10,
              maxlength: 12
          }
      },
      messages: {
          name: {
              required: "Пожалуйста, введите ваше имя",
              minlength: "Имя должно быть минимум 2 символа"
          },
          email: {
              required: "Пожалуйста, введите ваш email",
              email: "Пожалуйста, введите корректный email"
          },
          phone: {
              required: "Пожалуйста, введите ваш номер телефона",
              digits: "Пожалуйста, введите только цифры",
              minlength: "Номер телефона должен быть не менее 10 цифр",
              maxlength: "Номер телефона должен быть не более 12 цифр"
          }
      }
  });
});
