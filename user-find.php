<?php
include_once('sesion.php');
include_once('mysql-config.php');
	session_start();
	$codigo = $_REQUEST[codigo];
	$registros=mysqli_query($conexion,"select username,pass,name,email,address,phone from user where id=$codigo;") or
	die("Problemas con la conexión");
	
	if($reg=mysqli_fetch_array($registros)){
	$username = $reg[username];
	$pass = $reg[pass];
	$name = $reg[name];
	$email = $reg[email];
	$phone = $reg[phone];
	$address = $reg[address];
    $aux = true;
	}
	mysqli_close($conexion);
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SESIONES</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Icono-->
    <link rel="shortcut icon" href="img/sesion.ico">

    <!--Font Awesome-->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <!--Sticky Footer-->
    <link href="css/sticky-footer.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        body {
            padding-top: 70px;
            /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
        }
		th{
			border-bottom: 1px solid black;
		}
		td, th{
			padding:13px;					
		}
    </style>

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
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="" href="index.html"><img style="width:auto ;height:auto;" src="./img/pcmain.png" alt=""></a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav pull-right">
                        <li>
                            <a href="salir.php">LOG OUT</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

        <!-- Page Content -->
        <div class="container">
            
            <div class="row">
			<div class="col-md-7">
            <?php  
                if($aux){
				echo "<h1>Datos del usuario</h1>";
				echo "<br>";
				echo "<hr>";
				echo "<br>";
				echo "<b>Codigo:</b>";
				echo "<p>$codigo</p>";
				echo "<br>";
				echo "<b>Usuario:</b>";
				echo "<p>$username</p>";
				echo "<br>";
				echo "<b>Contraseña:</b>";
				echo "<p>$pass</p>";
				echo "<br>";
				echo "<b>Nombre:</b>";
				echo "<p>$name</p>";
				echo "<br>";
				echo "<b>Correo:</b>";
				echo "<p>$email</p>";
				echo "<br>";
				echo "<b>Numero Telefonico:</b>";
				echo "<p>$phone</p>";
				echo "<br>";
				echo "<b>Direccion:</b>";
				echo "<p>$address</p>";
				echo "<br>";
            }else{

                 echo "<h1>El usuario no existe</h1>";
            }
            ?>
			</div>
			
			<div class="col-md-3">
				<a href="user-config.php" class="btn btn-primary text-right" >Regresar</a>
			</div>
                
				

            </div>
        </div>
        <!-- /.container -->

       <!--  <footer class="footer text-center">
            <span class="glyphicon glyphicon-user"></span>
            Sesiones con PHP &copy;
        </footer> -->

        <!-- jQuery Version 1.11.1 -->
        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

    </body>

</html>