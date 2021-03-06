import Swiper from 'swiper/bundle';

$(function() {
  var heroSwiperThumbs = new Swiper('.hero-swiper-thumbs', {
    spaceBetween: 0,
    slidesPerView: 3,
  });
  var heroSwiper = new Swiper('.hero-swiper', {
    slidesPerView: 1,
    spaceBetween: 0,
    loop: true,
    //effect: 'fade',
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    thumbs: {
      swiper: heroSwiperThumbs,
    },
  });

  var memberSwiper = new Swiper('.member-swiper', {
    spaceBetween: 30,
    slidesPerView: 1,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    breakpoints: {
      640: {
        slidesPerView: 1,
        spaceBetween: 30,
      },
      768: {
        slidesPerView: 2,
        spaceBetween: 30,
      },
      1024: {
        slidesPerView: 3,
        spaceBetween: 30,
      },
    },
  });

  var sponsorSwiper = new Swiper('.sponsor-swiper', {
    spaceBetween: 30,
    //slidesPerView: 4,
    loop: true,
    speed: 8000,
    slidesPerView: 'auto',
    autoplay: {
      delay: 1,
      disableOnInteraction: false,
    },
  });

});