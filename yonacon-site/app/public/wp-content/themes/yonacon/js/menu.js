// jQuery
$(function () {
  $('.hamburger').click(function () {
    $(this).toggleClass('active');

    if ($(this).hasClass('active')) {
      $('.navsp').addClass('active');
    } else {
      $('.navsp').removeClass('active');
    }
  });
});