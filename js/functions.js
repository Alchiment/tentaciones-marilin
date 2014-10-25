$(function(){

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
		$(window).on('resize', slider);
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
						//Altura 2048 / Ancho 1315 1.55
						'height': ($('.slider-box').width()*1)+'px',
						'width':  ($('.slider-box').width())

					});
					$('.slider-container').css({
						'margin-left': -(con * $('.slider-box').width())+'px'
					});
				});	
			}
});
