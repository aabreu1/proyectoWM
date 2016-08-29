<?php 
include_once('mysql-config.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>Te lo Armo - Empresa de Tecnologia</title>

		<!-- Bootstrap Core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">

		<!-- Custom CSS -->
		<link href="css/shop-homepage.css" rel="stylesheet">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
			<![endif]-->
		</head>
		<body>
			<!-- Navigation -->
			<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
					  <!-- <img src="./img/pcmenu.png" alt="" height="100%" width="10%"> -->
					  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					
					<a class="" href="tienda.php"><img style="width:auto ;height:auto;" src="./img/pcmain.png" alt=""></a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li>
							<a href="about.html">Quienes Somos</a>
						</li>
						<li>
							<a href="services.html">Servicios</a>
						</li>
						<li>
							<a href="contact.html">Contactenos</a>
						</li>
					</ul>
					
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav pull-right" style="padding: 0;">
							<li >
							<div style="overflow:hidden;">
								<h3 style="display: inline-block; color: rgb(255, 255, 255); margin-right: 5px;"><?php echo $_SESSION['usuario']; ?></h3>
								<!--<a href="user.php"><span class="glyphicon glyphicon glyphicon-cog"></span></a>-->
								<!-- Button trigger modal -->
								  <?php
									if($_SESSION['usuario'] == ""){
										echo '<button type="button" style="margin: 0;" class="btn btn-primary btn-sm" data-target="#myModal" data-toggle="modal" >Hola Mundo</button>';
									} else {
										echo '<a class="btn btn-primary btn-sm" href="user-config.php" >Ingresar</a><a href="salir.php">Salir</a>';
									}
								  ?>
							</div>
						  </li>
					  </ul>
				  </div>

			  </div>
			  <!-- /.navbar-collapse -->
		  </div>
		  <!-- /.container -->
	  </nav>
	  
	  <!-- Modal -->
	  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog modal-sm" role="document">
			<div class="modal-content panel-primary">
			  <div class="modal-header panel-heading text-center">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Ingresa con tu usuario y contraseña</h4>
			</div>
			<form action="control.php" method="post">
				<div class="modal-body">
					<label for="">Usuario:</label>
					<input class="form-control" type="text" name="usuario" placeholder="Usuario">
					<br>
					<label for="">Contraseña:</label>
					<input class="form-control" type="password" name="contrasena" placeholder="Contraseña">
				</div>
				<div class="modal-footer" style="text-align: center;">
					<button type="submit" class="btn btn-primary" >Iniciar Sesión</button>
				</div>
			</form>
			</div>
		</div>
	</div>
	<!-- Page Content -->
	<div class="container">

		<div class="row">

			<div class="col-md-3">
				<p class="lead">Tienda Virtual</p>
				<div class="list-group">
					<a href="#" class="list-group-item">Escritorio</a>
					<a href="#" class="list-group-item">Laptos</a>
					<a href="#" class="list-group-item">Tablets</a>
					<a href="#" class="list-group-item">Componentes PC</a>
					<a href="#" class="list-group-item">Servicio Tecnico</a>
				</div>
			</div>

			<div class="col-md-9">

				<div class="row carousel-holder">

					<div class="col-md-12">
						<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
							<ol class="carousel-indicators">
								<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
								<li data-target="#carousel-example-generic" data-slide-to="1"></li>
								<li data-target="#carousel-example-generic" data-slide-to="2"></li>
							</ol>
							<div class="carousel-inner">
								<div class="item active">
									<img class="slide-image" src="img/header1.jpg" alt="">
								</div>
								<div class="item">
									<img class="slide-image" src="img/header2.jpg" alt="">
								</div>
								<!-- <div class="item">
									<img class="slide-image" src="http://placehold.it/800x300" alt="">
								</div> -->
							</div>
							<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left"></span>
							</a>
							<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right"></span>
							</a>
						</div>
					</div>

				</div>

				<div class="row">

					<div class="col-sm-4 col-lg-4 col-md-4">
						<div class="thumbnail">
							<img src="img/product1.jpg" alt="">
							<div class="caption">
								<h4 class="pull-right">100.000 Bs</h4>
								<h4><a href="detalleItem.php">Laptos HP</a>
								</h4>
								<p>See more snippets like this online store item at <a target="_blank" href="detalleItem.html">Bootsnipp - http://bootsnipp.com</a>.</p>
							</div>
							<div class="ratings">
								<p class="pull-right">15 visitas</p>
								<p>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star"></span>
								</p>
							</div>
						</div>
					</div>

					<div class="col-sm-4 col-lg-4 col-md-4">
						<div class="thumbnail">
							<img src="img/product2.jpg" alt="">
							<div class="caption">
								<h4 class="pull-right">200.000 Bs</h4>
								<h4><a href="#">Componentes</a>
								</h4>
								<p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
							<div class="ratings">
								<p class="pull-right">12 visitas</p>
								<p>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star-empty"></span>
								</p>
							</div>
						</div>
					</div>

					<div class="col-sm-4 col-lg-4 col-md-4">
						<div class="thumbnail">
							<img src="img/st1.png" alt="">
							<div class="caption">
								<h4 class="pull-right">50.000 Bs</h4>
								<h4><a href="#">Servicio Tecnico</a>
								</h4>
								<p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
							<div class="ratings">
								<p class="pull-right">31 visitas</p>
								<p>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star-empty"></span>
								</p>
							</div>
						</div>
					</div>
<!--
					<div class="col-sm-4 col-lg-4 col-md-4">
						<div class="thumbnail">
							<img src="http://placehold.it/320x150" alt="">
							<div class="caption">
								<h4 class="pull-right">$84.99</h4>
								<h4><a href="#">Fourth Product</a>
								</h4>
								<p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
							<div class="ratings">
								<p class="pull-right">6 reviews</p>
								<p>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star-empty"></span>
									<span class="glyphicon glyphicon-star-empty"></span>
								</p>
							</div>
						</div>
					</div>

					<div class="col-sm-4 col-lg-4 col-md-4">
						<div class="thumbnail">
							<img src="http://placehold.it/320x150" alt="">
							<div class="caption">
								<h4 class="pull-right">$94.99</h4>
								<h4><a href="#">Fifth Product</a>
								</h4>
								<p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
							<div class="ratings">
								<p class="pull-right">18 reviews</p>
								<p>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star-empty"></span>
								</p>
							</div>
						</div>
					</div>

					<div class="col-sm-4 col-lg-4 col-md-4">
						<div class="thumbnail">
							<img src="http://placehold.it/320x150" alt="">
							<div class="caption">
								<h4 class="pull-right">$94.99</h4>
								<h4><a href="#">Sexto Producto</a>
								</h4>
								<p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
							<div class="ratings">
								<p class="pull-right">18 reviews</p>
								<p>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star-empty"></span>
								</p>
							</div>
						</div>
					</div>
-->                    
<!--
					<div class="col-sm-4 col-lg-4 col-md-4">
						<h4><a href="#">Like this template?</a>
						</h4>
						<p>If you like this template, then check out <a target="_blank" href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">this tutorial</a> on how to build a working review system for your online store!</p>
						<a class="btn btn-primary" target="_blank" href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">View Tutorial</a>
					</div>
-->
				</div>
			</div>
		</div>

	</div>
	<!-- /.container -->

	<div class="container">
		<hr>
		<!-- Footer -->
		<footer>
			<div class="row">
				<div class="col-lg-12">
					<p>Copyright &copy; Teloarmo.com 2016</p>
				</div>
			</div>
		</footer>

	</div>
	<!-- /.container -->

	<!-- jQuery -->
	<script src="js/jquery.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.min.js"></script>

	</body>

</html>
