jQuery(document).ready(function($){
  //Are we loaded?
  console.log('hell yeah!');

  try{Typekit.load();}catch(e){}

  // Background images on homepage

	$('#overview').parallax("50%", 0.2);
  $('#image').parallax("30%", 0.1);

  // Transition on header nav

  $('.angle-left').click(function() {
    $('.nav-bar').toggleClass('show');
    $('.angle-left').toggleClass('upside-down');
  });

  // Slide out responsive navigation

  $('#menu').click(function() {
    $('#responsiveNav').toggle('slide', {direction:'left'}, 300);
  });

});
