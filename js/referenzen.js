$(document).ready(function(){
	$("dt").click(function(){ 
		$(this).next("dd").toggle(0); 
		$(this).children("a").toggleClass("closed open"); 
	});
});
$(document).ready(function(){
var anker = location.href.split('#')[1];
	switch (anker) {
	  case 'Badezimmer':
		
		$( "dt" ).eq(0).next("dd").toggle(0);
		$( "dt" ).eq(0).children("a").toggleClass("closed open")
		break;
	  case 'Treppen':

	   $( "dt" ).eq(1).next("dd").toggle(0);
	   $( "dt" ).eq(1).children("a").toggleClass("closed open")
		break;
		case 'Arbeitsplatten':

	   $( "dt" ).eq(2).next("dd").toggle(0);
	   $( "dt" ).eq(2).children("a").toggleClass("closed open")
		break;
		case 'Fussboeden':

	   $( "dt" ).eq(3).next("dd").toggle(0);
	   $( "dt" ).eq(3).children("a").toggleClass("closed open")
		break;
		case 'Aussenbereich':

	   $( "dt" ).eq(4).next("dd").toggle(0);
	   $( "dt" ).eq(4).children("a").toggleClass("closed open")
		break;
		case 'Einzelstuecke':

	   $( "dt" ).eq(5).next("dd").toggle(0);
	   $( "dt" ).eq(5).children("a").toggleClass("closed open")
		break;
	  default:
	  
	}
});
function ausklappen(anker){
	switch (anker) {
		case 'Badezimmer':
			if(	$("#dt"+1).next("dd").css('display') == 'none'){
			$( "dt" ).eq(0).next("dd").toggle(0);
			$( "dt" ).eq(0).children("a").toggleClass("closed open")}
			break;
		case 'Treppen':
			if(	$("#dt"+2).next("dd").css('display') == 'none'){
			$( "dt" ).eq(1).next("dd").toggle(0);
			$( "dt" ).eq(1).children("a").toggleClass("closed open")}
			break;
		case 'Arbeitsplatten':
			if(	$("#dt"+3).next("dd").css('display') == 'none'){
			$( "dt" ).eq(2).next("dd").toggle(0);
			$( "dt" ).eq(2).children("a").toggleClass("closed open")}
			break;
		case 'Fussboeden':
			if(	$("#dt"+4).next("dd").css('display') == 'none'){
			$( "dt" ).eq(3).next("dd").toggle(0);
			$( "dt" ).eq(3).children("a").toggleClass("closed open")}
			break;
		case 'Aussenbereich':
			if(	$("#dt"+5).next("dd").css('display') = 'none'){
			$( "dt" ).eq(4).next("dd").toggle(0);
			$( "dt" ).eq(4).children("a").toggleClass("closed open")}
			break;
		case 'Einzelstuecke':
			if(	$("#dt"+6).next("dd").css('display') = 'none'){
			$( "dt" ).eq(5).next("dd").toggle(0);
			$( "dt" ).eq(5).children("a").toggleClass("closed open")}
			break;
		default:
	}
};