jQuery(document).ready(function($){
  //Are we loaded?
  console.log('hell yeah!');

  try{Typekit.load();}catch(e){}

  // Background images on homepage

  $window = $(window);
  if( $window.width() > 1025){
    $('#overview').parallax("50%", 0.2);
    $('#image').parallax("30%", 0.1);
  };

  if( $window.width() <= 1025){
    $('header').css("background-attachment", "scroll");
    $('#overview').css("background-attachment", "scroll");
    $('#image').css("background-attachment", "scroll");
  };

  // Transition on header nav

  $('.angle-left').click(function() {
    $('.nav-bar').toggleClass('show');
    $('.angle-left').toggleClass('upside-down');
  });

  // Slide out responsive navigation

  $('#menu').click(function() {
    $('#responsiveNav').toggle('slide', {direction:'right'}, 300);
  });

});
