<!DOCTYPE html>
	<html lang="es">
	<head>
			<meta charset="utf-8">
			<meta name="description" content="Different styles of fashion Temptations Marilin">
			<meta name="keywords" content="fashion, style, Temptations, Marilin">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
			<title>Tentaciones Marilin</title>
			<link rel="stylesheet" href="css/normalize.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/style.css">
			<link rel="stylesheet" href="img/awesome/css/font-awesome.css">
			<script src="js/jquery-1.11.1.min.js"></script>
			<script src="js/bootstrap.js"></script>
			<script src="js/browser.js"></script>
			<script src="js/modernizr.js"></script>
			<script src="js/functions.js"></script>
			<script src="js/compatibility.js"></script>
			<!--[if IE 9]>
				<link rel="stylesheet" href="css/ie9.css">
			<![endif]-->
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
		<div class="carousel slide col-lg-6 col-md-6 col-sm-6 col-xs-12" id="slider">
			<div class="carousel-inner" id="slider">
				<div class="item active">
					<img src="img/pictures/ves_01.jpg" alt="imagen 1">
				</div>
				<div class="item">
					<img src="img/pictures/ves_02.jpg" alt="imagen 2">
				</div>
				<div class="item">
					<img src="img/pictures/con_01.jpg" alt="imagen 3">
				</div>
			</div>
			<!-- CONTROLS -->
			<a href="#slider" class="left carousel-control" data-slide="prev">
				<i class="fa fa-chevron-left"></i>
			</a>
			<a href="#slider" class="right carousel-control" data-slide="next">
				<i class="fa fa-chevron-right"></i>
			</a>
		</div>
	</body>

</html>