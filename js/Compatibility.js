var brw  = new Browser();

$(function(){
	$(document).on('ready', VideoToImage());
	/* ==========================================================================
	   REPLACE VIDEO TO IMAGE - INCOMPATIBILITY VIDEO
	   ========================================================================== */
	function VideoToImage(){
		if(!Modernizr.video){
				$('video').replaceWith('<img src="img/video.png" alt="" class="background-banner">');
		}
	}
	/* ==========================================================================
	   COMPATIBILIDAD CON SAFARI
	   ========================================================================== */
	// Support Safari, Alert Message - Incompatibility
	if(brw.fullName == 'Microsoft Internet Explorer' && brw.fullVersion < 10 ||brw.fullName == 'Apple Safari'){
		//Message alert
		$('body').prepend('<div class="message">'+
						'<span id="cerrar" class="cerrar"><i class="fa fa-close"></i></span>'+
						'<h3>Atención <i class="fa fa-exclamation-triangle" style="color: yellow;"></i></h3>'+
						'<hr>'+
						'<p>'+
						'Algunas características no funcionan correctamente.<br>' +
						'<b>Abra la página en otro navegador como: </b>  <br>'+
						'<b><i><a href="http://www.google.com/intl/es-419/chrome/" target="_blank">Google Chrome</a></i> </b> <br>'+
						'<b><i><a href="https://www.mozilla.org/es-ES/firefox/new/" target="_blank">FireFox Mozilla</a></i> </b>'+
						'</p>'+
						'</div>');
		//btn Close
		$('#cerrar').on('click',function(){
				$('body .message').slideUp(300,function(){$('body .message').remove()});
		});
	}
	// Support IE, Alert Message - Incompatibility
	if(brw.fullName == 'Microsoft Internet Explorer' && brw.version < 9){
	 $('.modal-body').append('Su navegador NO es compatible con la página web. <br>' +
	 						 'Actualice su navegador a una versión mayor a ' + brw.fullVersion + ' ó instale <b><i><a href="http://www.google.com/intl/es-419/chrome/" target="_blank">Google Chrome</a></i></b> o ' +
	 						 '<b><i><a href="https://www.mozilla.org/es-ES/firefox/new/" target="_blank">FireFox Mozilla</a></i></b><br> <hr>' +
	 						 '<b>Datos del navegador:</b> <br>' +
	 						 'Nombre: ' + brw.fullName + '<br>' +
	 						 'Versión: '+ brw.fullVersion +'<br>'+
	 						 'Plataforma: '+ brw.platform + '.'
	 						 );
	 $('.fade').modal();
	}

});

