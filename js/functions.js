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
	//botons slider
		$('.left').on('click',function(e){
			e.preventDefault();
			moveSlide('left');
		});
		$('.right').on('click',function(e){
			e.preventDefault();
			moveSlide('right');
		});
		slider();
		//Altura imagenes miniatura
		// $(window).on('resize',function(){
		// 	$('.slider-box').append($('.image').width());
			
		// });

			$('.image-min').each(function(i, e){
				$(e).css({
					//Capturando el tamaño desde la funcion slider()
					'height': tmslider + 'px',
				});
			});


		$(window).on('resize', slider);
		$(window).on('resize',$('.image-min'));
		var con = 0;
		function moveSlide(dir){
			var limit = $('.slider-box .slide').length;
			if(dir=='right'){
				if(con<=limit){
					con++;
				}
				if(con==limit){
					con = 0;
				}
			}else{
				if(con==0){
					con = limit;
				}
				if(con>=0){
					con--;
				}
			}
			$('.slider-container').animate({
				'margin-left': -(con * $('.slider-box').width())+'px'
			});
		}
		function slider(){
			$('.slider-box .slide').each(function(i,el){
					$(el).css({
						'background-image':'url(img/pictures/'+$(el).data('background')+')',
						'height': ($('.slider-box').width()*1)+'px',
						'width':  ($('.slider-box').width())

					});
					$('.slider-container').css({
						'margin-left': -(con * $('.slider-box').width())+'px'
					});
				});	
			tmslider = ($('.slider-box').width()*1)/2;
			}
			
});
