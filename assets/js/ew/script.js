/*========================
 Manifest js
 ==========================*/
$(window).on('load', function () {
  'use strict';
  if ('serviceWorker' in navigator) {
    navigator.serviceWorker
      .register('sw.js');
  }
});


/*=====================
    Loader js
==========================*/
$(window).on('load', function () {
  setTimeout(function () {
    $('.loader').fadeOut('slow');
  }, 500);
  $('.loader').remove('slow');
});


/*=====================
    Header sidebar
==========================*/
$(".nav-bar").on('click', function () {
  $(".header-sidebar").addClass("show");
  $(".overlay-sidebar").addClass("show");
  $('body').css({
    'overflow': 'hidden'
  });
});
$(".overlay-sidebar").on('click', function () {
  $(".header-sidebar").removeClass("show");
  $(".overlay-sidebar").removeClass("show");
  $('body').css({
    'overflow': 'auto'
  });
});


/*=====================
    Header scroll js
==========================*/
$(window).scroll(function () {
  var scroll = $(window).scrollTop();

  if (scroll >= 15) {
    $("header").addClass("darkHeader");
  } else {
    $("header").removeClass("darkHeader");
  }
});

/*=====================
    Filter select js
==========================*/
$('.filter-row li, .filter-color li, .size-select li').on('click', function (e) {
  $(this).addClass('active').siblings('.active').removeClass('active');
});


/*=====================
 Quantity js
==========================*/
var minVal = 1, maxVal = 20; // Set Max and Min values
// Increase product quantity on cart page
$(".qty-counter .quantity-right-plus").on('click', function () {
  var $parentElm = $(this).parents(".qty-counter");
  $(this).addClass("clicked");
  setTimeout(function () {
    $(".clicked").removeClass("clicked");
  }, 100);
  var value = $parentElm.find(".input-number").val();
  if (value < maxVal) {
    value++;
  }
  $parentElm.find(".input-number").val(value);
});
// Decrease product quantity on cart page
$(".qty-counter .quantity-left-minus").on('click', function () {
  var $parentElm = $(this).parents(".qty-counter");
  $(this).addClass("clicked");
  setTimeout(function () {
    $(".clicked").removeClass("clicked");
  }, 100);
  var value = $parentElm.find(".input-number").val();
  if (value > 1) {
    value--;
  }
  $parentElm.find(".input-number").val(value);
});


/*=====================
    wishlist added start
==========================*/
$(".wishlist-btn").on('click', function () {
  if ($(this).hasClass("deactivate")) {
    $(this).removeClass("deactivate")
  }
  if ($(this).hasClass("active")) {
    $(this).addClass("deactivate")
  }
  $(this).toggleClass("animate");
  $(this).toggleClass("active");
  $(this).toggleClass("inactive");
});

/*=====================
    Slick slider start
==========================*/
$('.color-slider').slick({
  infinite: true,
  slidesToShow: 5,
  slidesToScroll: 5,
  centerMode: true,
  centerPadding: '30px',
  dots: false,
  arrows: false,
rtl: true,
});

$('.home-slider').slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  centerMode: true,
  centerPadding: '30px',
  dots: true,
  arrows: false,
rtl: true,
});

$('.brand-slider').slick({
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 1,
  centerMode: true,
  centerPadding: '30px',
  dots: false,
  arrows: false,
rtl: true,
});

$('.product-slider').slick({
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 1,
  centerMode: true,
  centerPadding: '60px',
  dots: false,
  arrows: false,
rtl: true,
  responsive: [
    {
      breakpoint: 576,
      settings: {
        slidesToShow: 2,
      }
    },
    {
      breakpoint: 365,
      settings: {
        slidesToShow: 2,
        centerPadding: '20px',
      }
    }
  ]
});

$('.payment-slider').slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  centerMode: true,
  centerPadding: '40px',
  dots: false,
  arrows: false,
rtl: true,
});

$('.onboarding-slider').slick({
  centerMode: true,
  centerPadding: '40px',
  slidesToShow: 1,
  infinite: false,
  arrows: false,
rtl: true,
  dots: true
});



/*=====================
 Image to background js
 ==========================*/
$(".bg-top").parent().addClass('b-top');
$(".bg-bottom").parent().addClass('b-bottom');
$(".bg-center").parent().addClass('b-center');
$(".bg_size_content").parent().addClass('b_size_content');
$(".bg-img").parent().addClass('bg-size');
$(".bg-img.blur-up").parent().addClass('blur-up lazyload');

jQuery('.bg-img').each(function () {

  var el = $(this),
    src = el.attr('src'),
    parent = el.parent();

  parent.css({
    'background-image': 'url(' + src + ')',
    'background-size': 'cover',
    'background-position': 'center',
    'display': 'block'
  });

  el.hide();
});


/*========================
 Payment show more js
 ==========================*/
$('.show-more').on('click', function (e) {
  $('.offer-listing').toggleClass("maximized");
  $(this).text(function (i, text) {
    return text === "نمایش کمتر" ? "بیشتر نشان بده" : "نمایش کمتر";
  })
});


/*========================
 Dark local storage setting js
 ==========================*/
$('#darkButton').change(function () {
  if ($(this).is(":checked")) {
    $('body').addClass('dark');
    $("#change-link").attr("href", "assets/css/dark.css");
    localStorage.setItem('body', 'dark');
    localStorage.setItem('layoutcss', 'assets/css/dark.css');
  } else {
    $('body').removeClass('dark');
    $("#change-link").attr("href", "assets/css/style.css");
    localStorage.setItem('body', '');
    localStorage.setItem('layoutcss', 'assets/css/style.css');
  }
});

$("body").attr("class", localStorage.getItem('body'));
$("#change-link").attr("href", localStorage.getItem('layoutcss') ? localStorage.getItem('layoutcss') : 'assets/css/style.css');
localStorage.getItem('body') ? $('#darkButton').attr('checked', true) : '';








