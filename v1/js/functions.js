$(function(){
//loadgin
	var tmslider = '';
	var ventana = $(document).height()+500;
	//PRELOAD
	$("body").css({"overflow-y":"hidden"});
	$('body').prepend('<div class="preloadWeb"><img src="img/loading.GIF" width="50" height="50" alt="" class="imgLoad"><br><p>Cargando...</p></div>');
	$('.preloadWeb').css({
		'height':ventana+'px', 
		// 'height':'1500px', 
		'width':'100%', 

	});
	$(window).load(function(){
		$('.preloadWeb').fadeOut(3000,function(){
			  $("body").css({"overflow-y":"auto"});
		});
	});
$('a, img').tooltip();
$('.carousel').carousel();
});
