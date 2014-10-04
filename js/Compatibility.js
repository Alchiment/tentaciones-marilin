$(function(){
	$(document).on('ready', VideoToImage(), ComSafari());
	/* ==========================================================================
	   REPLACE VIDEO TO IMAGE AND BUTTON TOGGLE FIXED
	   ========================================================================== */
	function VideoToImage(){
		if(brw.fullName == 'Microsoft Internet Explorer' <= 9 || brw.fullName == 'Apple Safari'){
				$('video').replaceWith('<img src="img/video.png" alt="" class="background-banner">');
				//Disabled btn toggle navbar
				$('.navbar-toggle').css('position','relative');
		}
	}
	/* ==========================================================================
	   COMPATIBILIDAD CON SAFARI
	   ========================================================================== */
	function ComSafari(){
		if(brw.fullName == 'Apple Safari'){
				$('.banner-text').css('margin-top', '50px');
		}
	}

});