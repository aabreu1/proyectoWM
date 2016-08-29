<!DOCTYPE html>
<?php 
error_reporting(E_ERROR | E_PARSE);
include_once('sesion.php'); ?>
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
                    
                    <a class="" href="index.html"><img style="width:auto ;height:auto;" src="./img/pcmain.png" alt=""></a>
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
                        <ul class="nav navbar-nav pull-right">
                            <li>
                            <h3 style="display: inline-block; color: rgb(255, 255, 255); margin-right: 5px;"><?php echo "Nombre: ".$_SESSION['usuario']; ?></h3>
                            </li>
                            <li>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                                  Logearse
                              </button>
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
            <br>
            <br>
                <div class="row">
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="img/product1.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">100.000 Bs</h4>
                                <h4><a href="#">Laptops HP</a>
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
                        <form action="pago.php" method="post" >
                            <h4><a href="#">Descripci&oacute;n</a>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <span style="margin-right:10px;">Cantidad:  </span>

                            <input type="text" name="producto" value="Laptop HP" style="display:none;">
                            <input type="text" name="costo" value="100000" style="display:none;">
                            <input type="number" name="cantidad" value="1" class="form-control" style="display: inline-block; width: 30%;">
                            <button class="btn btn-primary" type="submit" >Comprar</button> 
                        </form>
                    </div>

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
                    <p>Copyright &copy; Your Website 2014</p>
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
