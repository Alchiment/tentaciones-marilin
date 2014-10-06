$(function(){
/*
BOTON TOGGLE FIXED / DISABLED
	//validar la posicion del scroll
	if (window.scrollTop != 0) {
		$('.navbar-toggle').addClass('fixed');
	};
	//manejador del boton menu
	$('.navbar-toggle').on('click',function(){
		$('html, body').animate({
			scrollTop: 0
		},500);
		$('.navbar-toggle').toggleClass('fixed');
	});
*/
$('a, img').tooltip();
$('.carousel').carousel();
});

