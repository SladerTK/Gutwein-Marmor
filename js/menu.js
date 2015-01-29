function ausfahren() {
$('.menu').toggle('slow');
};
$(window).resize(function() {
  if ($(window).width() > 700) {
     $(".menu").show();
  }
  else {
	$(".menu").hide();
  }
});









