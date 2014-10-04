<!DOCTYPE html>
	<html lang="es">
	<head>
			<meta charset="utf-8">
			<meta name="description" content="Different styles of fashion Temptations Marilin">
			<meta name="keywords" content="fashion, style, Temptations, Marilin">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
			<title>Tentaciones Marilin</title>
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/style.css">
			<link rel="stylesheet" href="css/normalize.css">
			<link rel="stylesheet" href="img/awesome/css/font-awesome.css">
			<script src="js/jquery-1.11.1.min.js"></script>
			<script src="js/bootstrap.js"></script>
			<script src="js/browser.js"></script>
			<script src="js/functions.js"></script>
			<script src="js/Compatibility.js"></script>
	</head>
	<body>
		<!-- HEADER -->
		<header>
			<nav class="navbar navbar-default">
			<!-- LOGO -->
				<ul class="nav navbar-nav pull-left">
					<li>
						<img src="img/logop.png" width="50" alt="Logo Tentaciones Marilin" title="Tentaciones Marilin" data-placement="right">
					</li>
				</ul>
			<!-- BTN NAV -->
				<div class="navbar-header">
					<button id="btnMenu" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navheader">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
			<!-- CONTENT NAVBAR -->
				<div class="collapse navbar-collapse" id="navheader">
					<ul class="nav navbar-nav pull-right">
						<li class="box-index" ><a href="#">Inicio</a></li>
						<li class="box-sections"><a href="#sections">Secciones</a></li>
						<li class="box-contact"><a href="#contact">Contáctenos</a></li>
					</ul>
				</div>
			</nav>
		</header>

		<!-- MODAL -->
		<div class="modal fade">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
						<h2> <i class="fa fa-exclamation-triangle fa-2x" style="color: red;"></i> Incompatibilidad</h2>
					</div>
					<div class="modal-body"></div>
					<div class="modal-footer">
						<button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		<!--BANNER -->
		<div class="banner">
			<!--BANNER TEXT-->
			<div class="banner-text">
				<!-- TITLE NAME -->
				<h1 class="banner-title">Tentaciones <span><img src="img/logop.png" alt="Logo pequeño" width="30"></span> Marilin</h1>
				<!-- TITLE SLOGAN -->
				<h3 class="banner-eslogan">Moda a tu gusto</h3>
			</div>
			<video width="100%" loop autoplay muted class="background-banner">
				<source src="video/VID-20140927-WA0000.mp4" type="video/mp4">
				<source src="video/VID-20140927-WA0000.webm" type="video/webm">
				<source src="video/VID-20140927-WA0000.ogg" type="video/ogg">
				<img src="img/video.png" alt="" witdh="100%">
			</video>

		</div>
	</body>
	<script>
		var brw  = new Browser();
		$(function(){

			if(brw.fullName == 'Microsoft Internet Explorer' || brw.fullName == 'Apple Safari'){
				//Message alert
				$('body').prepend('<div class="message">'+
								'<span id="cerrar" class="cerrar"><i class="fa fa-close"></i></span>'+
								'<h3>Atención <i class="fa fa-exclamation-triangle" style="color: yellow;"></i></h3>'+
								'<hr>'+
								'<p">'+
								'Usted está usando un motor de navegación con <i>'+brw.name+'</i><br>'+
								'Algunas características no funcionan correctamente.<br>' +
								'<b>Abra la página en otro navegador como: </b>  <br>'+
								'<b><i><a href="http://www.google.com/intl/es-419/chrome/">Google Chrome</a></i> </b> <br>'+
								'<b><i><a href="https://www.mozilla.org/es-ES/firefox/new/">FireFox Mozilla</a></i> </b>'+
								'</p>'+
								'</div>');
				//btn Close
				$('#cerrar').on('click',function(){
						$('body .message').slideUp(300,function(){$('body .message').remove()});
				});
			}
			// Support IE, Alert Message - Incompatibility
			if(brw.fullName == 'Microsoft Internet Explorer' && brw.version < 9){
			 $('.modal-body').append('Su navegador NO es compatible con todas las características de la página web. <br>' +
			 						 'Actualice su navegador a una versión mayor a ' + brw.fullVersion + '<br> <hr>' +
			 						 '<b>Datos del navegador:</b> <br>' +
			 						 'Nombre: ' + brw.fullName + '<br>' +
			 						 'Versión: '+ brw.fullVersion +'<br>'+
			 						 'Plataforma: '+ brw.platform + '.'
			 						 );
			 $('.fade').modal();
			}
		});
		$('a, img').tooltip();
	</script>

</html>