if ($('.menu').length > 0) {
  $('.menu-toggle').on('click', function(){
    if ($('.menu').is(':visible')) {
      $('.menu-toggle').removeClass('active');
      $('.menu').slideUp();
    } else {
      $('.menu-toggle').addClass('active');
      $('.menu').slideDown();
    }
  });
} 