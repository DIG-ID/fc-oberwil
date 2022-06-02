$(function() {
  //Back to top button
  var btnBtt = $('#button-btt');
  $(window).on( 'scroll', function() {
    if ($(window).scrollTop() > 600) {
      btnBtt.addClass('show');
    } else {
      btnBtt.removeClass('show');
    }
  });
  btnBtt.on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({scrollTop:0}, '300');
  });
  //Shrink on scroll
  var header = $('#main-header');
  $(window).on( 'scroll', function() {
    if ($(window).scrollTop() > 110) {
      header.addClass('shrink');
    } else {
      header.removeClass('shrink');
    }
  });
});