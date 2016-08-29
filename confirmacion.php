<?php error_reporting(E_ERROR | E_PARSE);
    //datospersonales

    include_once('sesion.php');
    //datos comprador
    $_SESSION['nombre'] = $_POST['nombre'];
    $_SESSION['apellido'] = $_POST['apellido'];
    $_SESSION['cedula'] = $_POST['cedula'];
    $_SESSION['direccion'] = $_POST['direccion'];
    $_SESSION['tlfhab'] = $_POST['tlfhab'];
    $_SESSION['tlfcel'] = $_POST['tlfcel'];
    $_SESSION['tlftra'] = $_POST['tlftra'];
    //datos del pago
    $_SESSION['Tpago'] = $_POST['Tpago'];
    $_SESSION['Ttarjeta'] = $_POST['Ttarjeta'];
    $_SESSION['tarjeta'] = $_POST['tarjeta'];
    $_SESSION['email'] = $_POST['email'];
?>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" href="img/icon_dota2.png"> 
    <title>Te lo Armo - Empresa de Tecnologia</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/sticky-footer.css" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

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

    <!-- Page Content -->
    <div class="container col-md-4 col-md-offset-1">
        <form action="" method="POST">


                <label for=" "><h3><b>Datos del comprador</b></h3></label><br>
    				<label><?php echo "Nombre: ".$_SESSION['nombre']." ".$_SESSION['apellido']; ?></label> <br>
    				<label><?php echo "Cedula: ".$_SESSION['cedula']; ?></label> <br>
    				<label><?php echo "Direccion: ".$_SESSION['direccion']; ?></label> <br>
    				<label><?php echo "Telefono Hab: ".$_SESSION['tlfhab']; ?></label> <br>
    				<label><?php echo "Telefono Cel: ".$_SESSION['tlfcel']; ?></label> <br>
    				<label><?php echo "Telefono Trabajo: ".$_SESSION['tlftra']; ?></label> <br>

                <label for=" "><h3><b>Datos del Producto</b></h3></label><br>
                    <label><?php echo "Producto : ".$_SESSION['producto']."       <br>  Costo: ".$_SESSION['costo']; ?></label> <br>
                     <label><?php echo "<u>Subtotal:</u>                <br>cantidad: ".$_SESSION['cantidad']."  <br> Precio: ".$_SESSION['costo']*$_SESSION['cantidad']; ?></label> <br>
                    <label><?php echo "IVA. (12%):                 ".$_SESSION['costo']*$_SESSION['cantidad']*0.12."</h4>"?></label> <br>
                    <label><?php echo "<h4>TOTAL:  ".$_SESSION['costo']*$_SESSION['cantidad']*1.12?></label> <br>

                <label for=" "><h3><b>Datos del Pago</h3></b></label><br>
                    <label><h5><?php echo "Tipo de Pago: ".$_SESSION['Tpago']; ?></h5></label> <br>
                    <label><h5><?php echo "Ttarjeta: ".$_SESSION['Ttarjeta']; ?></h5></label> <br>
                    <label><h5><?php echo "tarjeta: ".$_SESSION['tarjeta']; ?></h5></label> <br>
                    <label><h5><?php echo "email: ".$_SESSION['email']; ?></h5></label> <br>

                 </div>
                    <div class="panel-footer text-center" style="background-color: light-gray;">
                    <input type="submit" value="Confirmar" class="btn btn-primary">
        </form>
          <a href="./tienda.php" class="btn btn-primary">Seguir Comprando</a>

    </div>
    <!-- /.container -->
   

    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>