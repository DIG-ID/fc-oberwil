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

});