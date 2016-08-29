<?php
include_once('sesion.php');

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
                <div class="col-md-12">

                    <h1>
                        <span class="glyphicon glyphicon-user"></span>
                        &nbsp;INICIO
                    </h1>
                    <hr>
                </div>
            </div>
            <div class="row">
                <form action="RegistroDatos.php" method="post">
                    <div class="col-md-1"></div>
                    <div class="col-md-4">
                        <label for="">Nombre</label>
                        <input class="form-control" type="text"  name="Nombre" placeholder="Nombre">
                        <br>
                        <label for="">Correo</label>
                        <input class="form-control" type="text" name="Correo" placeholder="Correo">
                        <br>
                        <label for="">Telefono celular/Habitación</label>
                        <input class="form-control" type="text" name="Telefono" placeholder="Telefono">
                        <br>
                        <label for="">Direccion</label>
                        <textarea class="form-control" type="text" rows="5" name="Direccion" placeholder="Direccion"></textarea> 
                        <br>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-4">
                        <label for="">Moneda</label>
                            <Select class="form-control" name="Moneda">
                                <option value="0">Elegir...</option>
                                <option value="BSF">Bolivares</option>
                                <option value="COP">Peso Colombiano</option>
                                <option value="USD">USA Dollar</option>
                                <option value="EUR">Euro</option>
                            </Select>
                            <br>
                            <label for="">Tipo de Tarjeta</label>
                            <Select class="form-control" name="tarjeta">
                                <option value="0">Elegir...</option>
                                <option value="Debito">Debito</option>
                                <option value="Credito">Credito</option>
                                <option value="Prepagada">Prepagada</option>
                            </Select>
                            <br>
                            <label for="">Numero de Tarjeta</label>
                            <input class="form-control" type="text" name="numeroTarjeta" placeholder="numeroTarjeta">
                            <br>
                            <br>
                            <button type="submit" class="btn btn-primary text-right" >Continuar</button>
                    </div>
                    <div class="col-md-2"></div>
                </form>
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
