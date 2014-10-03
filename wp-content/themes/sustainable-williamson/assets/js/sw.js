jQuery(document).ready(function($){
  //Are we loaded?
  console.log('hell yeah!');

  try{Typekit.load();}catch(e){}

	$('#overview').parallax("50%", 0.1);
  $('#image').parallax("30%", 0.1);

});
