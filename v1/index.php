<!DOCTYPE html>
	<html lang="es">
	<head>
			<meta charset="utf-8">
			<meta name="description" content="Different styles of fashion Temptations Marilin">
			<meta name="keywords" content="fashion, style, Temptations, Marilin">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<title>Tentaciones Marilin</title>
			<link rel="stylesheet" href="css/normalize.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/style.css">
			<link rel="stylesheet" href="img/awesome/css/font-awesome.css">
			<script src="js/jquery-1.11.1.min.js"></script>
			<script src='http://code.jquery.com/jquery-latest.js'></script>
			<script src="js/bootstrap.js"></script>
			<script src="js/browser.js"></script>
			<script src="js/modernizr.js"></script>
			<script src="js/functions.js"></script>
			<script src="js/Compatibility.js"></script>
			<!--[if IE 9]>
				<link rel="stylesheet" href="css/ie9.css">
			<![endif]-->
			<script>
                console.log('hola mundo');
			</script>
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
		<!--<div class="preload"><img src="img/loading.GIF" class="imgLoad"alt="Loading"></div> -->
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
			<video loop autoplay muted class="background-banner">
				<source src="video/VID-20140927-WA0000.mp4" type="video/mp4">
				<source src="video/VID-20140927-WA0000.webm" type="video/webm">
				<source src="video/VID-20140927-WA0000.ogg" type="video/ogg">
			</video>
		</div>
		<!-- SEPARATOR -->
		<div class="separator">
			<p>Seccion Mujeres</p>
		</div>
		<!-- SLIDER -->
		<!-- <section class="col-lg-6 col-md-6 col-sm-6 col-xs-12 sli">
			<div class="slider-box">
				<div class="slider-container">
					<div class="slide" data-background="ves_02.jpg"></div>
					<div class="slide" data-background="ves_01.jpg"></div>
					<div class="slide" data-background="con_01.jpg"></div>
				</div>
				<span href="" class="left"><i class="fa fa-angle-left fa-3x"></i></span>
				<span href="" class="right"><i class="fa fa-angle-right fa-3x"></i></span>
			</div>
		</section> -->

		<section class="col-lg-6 col-md-6 col-sm-6 col-xs-12 sli">
			<div id="slider" class="carousel slide">
				  <!-- Indicators -->
				  <ol class="carousel-indicators">
				    <li data-target="#slider" data-slide-to="0" class="active"></li>
				    <li data-target="#slider" data-slide-to="1"></li>
				    <li data-target="#slider" data-slide-to="2"></li>
				  </ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
				    <div class="item active">
				      <img src="img/pictures/con_01.jpg" alt="Conjunto1">
				      <div class="carousel-caption">
				        Conjunto 1
				      </div>
				    </div>
				    <div class="item">
				      <img src="img/pictures/ves_01.jpg" alt="Vestido1">
				      <div class="carousel-caption">
				        Vestido 1
				      </div>
				    </div>
			    	<div class="item">
				    	<img src="img/pictures/ves_02.jpg" alt="Vestido2">
				    	<div class="carousel-caption">
				        	Vestido 2
				      	</div>
				   	</div>
				</div>

				  <!-- Controls -->
				  <a class="left carousel-control" href="#slider" role="button" data-slide="prev">
				    <span class="glyphicon glyphicon-chevron-left"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="right carousel-control" href="#slider" role="button" data-slide="next">
				    <span class="glyphicon glyphicon-chevron-right"></span>
				    <span class="sr-only">Next</span>
				  </a>
			</div>
		</section>



		<!-- IMGS -->
		<section class="col-lg-6 col-md-6 col-sm-6 col-xs-12 img">
			<div class="images-box">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 image-min">
						<img src="img/backgrounds/img-vestidos.png" alt="Imagen Vestidos" class="image">
						<h3 class="image-text-1">Vestidos</h3>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 image-min">
						<img src="img/backgrounds/img-conjuntos.png" alt="Imagen Conjuntos" class="image">
						<h3 class="image-text-1">Conjuntos</h3>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 image-min">
						<img src="img/backgrounds/img-lycra.png" alt="Imagen Lycra" class="image">
						<h3 class="image-text-1">Lycras</h3>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 image-min">
						<img src="img/backgrounds/img-blusa.png" alt="Imagen blusa" class="image">
						<h3 class="image-text-1">Blusas</h3>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 image-min">
						<img src="img/backgrounds/img-ropain.png" alt="Imagen ropa interior" class="image">
						<h3 class="image-text-2">Ropa Interior</h3>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 image-min">
						<img src="img/backgrounds/img-ropaba.png" alt="Imagen ropa de baño" class="image">
						<h3 class="image-text-2">Ropa de baño</h3>
					</div>
				</div>
			</div>
			<style>
				/*.rojo{
					
					background:red;}
				.verde{
					
					background:green;}
				.azul{
					
					background:blue;}
				.amarillo{
					
					background:yellow;}
				.negro{
					
					background:black;}
				.gris{
					
					background:rgb(180,180,180);}*/
			</style>
			<!--<div class="images-box">
				<div class="row">
					<div class="col-lg-4 image-min rojo">
					</div>
					<div class="col-lg-4 image-min verde">
					</div>
					<div class="col-lg-4 image-min azul">
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 image-min amarillo">
					</div>
					<div class="col-lg-4 image-min negro">
					</div>
					<div class="col-lg-4 image-min gris">
					</div>
				</div>
			</div>-->
		</section>
	</body>
</html>
