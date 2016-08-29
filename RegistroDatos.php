<?php

$_SESSION['Nombre'] = $_REQUEST['Nombre'];
$_SESSION['Correo'] = $_REQUEST['Correo'];
$_SESSION['Telefono'] = $_REQUEST['Telefono'];
$_SESSION['Direccion'] = $_REQUEST['Direccion'];
$_SESSION['Moneda'] = $_REQUEST['Moneda'];
$_SESSION['tarjeta'] = $_REQUEST['tarjeta'];
$_SESSION['numeroTarjeta'] = $_REQUEST['numeroTarjeta'];

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
    </style>

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
                <div class="col-md-12">

                    <h1>
                        <span class="glyphicon glyphicon-user"></span>
                        &nbsp;Registro de Datos Exitosamente
                    </h1>
                    <hr>
                </div>
            </div>
            <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-11">
                        <label style="font-family:verdana; font-size:20px" for="">Nombre: </label>
                        <span style="font-size:25px;"> <?php echo $_SESSION['Nombre'] <> "" ? $_SESSION['Nombre'] : "SIN DATOS" ;?> </span>	
                        <hr style="border: 2px solid #337ab7; border-radius:5px;">
                        <label style="font-family:verdana; font-size:20px" for="">Correo: </label>
                        <span style="font-size:25px;"> <?php echo $_SESSION['Correo'] <> "" ? $_SESSION['Correo'] : "SIN DATOS";?> </span>
                        <hr style="border: 2px solid #337ab7; border-radius:5px;">
                        <label style="font-family:verdana; font-size:20px" for="">Telefono celular/Habitación: </label>
                        <span style="font-size:25px;"> <?php echo $_SESSION['Telefono'] <> "" ? $_SESSION['Telefono'] : "SIN DATOS";?> </span>
                        <hr style="border: 2px solid #337ab7; border-radius:5px;">
                        <label style="font-family:verdana; font-size:20px" for="">Direccion: </label>
                        <span style="font-size:25px;"> <?php echo $_SESSION['Direccion'] <> "" ? $_SESSION['Direccion'] : "SIN DATOS";?> </span> 
                        <hr style="border: 2px solid #337ab7; border-radius:5px;">
                        <label style="font-family:verdana; font-size:20px" for="">Moneda: </label>
                        <span style="font-size:25px;"> <?php echo $_SESSION['Moneda'] <> "0" ? $_SESSION['Moneda'] : "SIN DATOS";?> </span>
                        <hr style="border: 2px solid #337ab7; border-radius:5px;">
                        <label style="font-family:verdana; font-size:20px" for="">Tipo de Tarjeta:</label>
                        <span style="font-size:25px;"> <?php echo $_SESSION['tarjeta'] <> "0" ? $_SESSION['tarjeta'] : "SIN DATOS";?> </span>
                        <hr style="border: 2px solid #337ab7; border-radius:5px;">
                        <label style="font-family:verdana; font-size:20px" for="">Numero de Tarjeta: </label>
                        <span style="font-size:25px;"> <?php echo $_SESSION['numeroTarjeta'] <> "" ? $_SESSION['numeroTarjeta'] : "SIN DATOS";?> </span>
                        <hr style="border: 2px solid #337ab7; border-radius:5px;">
                        <br>
                        <button class="btn btn-primary text-right" onclick="location='user.php'">Regresar a la pagina inicial</button>
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
