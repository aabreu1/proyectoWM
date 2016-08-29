<html lang="en">
<?php error_reporting(E_ERROR | E_PARSE);
    include_once('sesion.php');
    $_SESSION['producto'] = $_POST['producto'];
    $_SESSION['costo'] = $_POST['costo'];
    $_SESSION['cantidad'] = $_POST['cantidad'];
?>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" href="img/icono.png"> 
    <title>Te lo Armo - Empresa de Tecnologia</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/sticky-footer.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <script src="http://cdn.jquerytools.org/1.2.6/full/jquery.tools.min.js"></script>
    <script src="/media/js/jquery.tools.min.js">
</script>

 
<!-- dateinput styling -->
<link rel="stylesheet" type="text/css" href="dateinput.css"/>

    <!-- Custom CSS -->
    <style>
    body {
        padding-top: 70px;
        
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
    <div class="container">

        <div class="row">
            <div class="col-md-4 col-md-offset-4">
              <div class="panel panel-primary">
                
                <div class="panel-heading">
                    Formularion de Pago
                </div>
                   <form action="confirmacion.php" method="POST">

                        <div class="panel-body">  
                            <label for=" "><h4><b><u>Datos del Producto</u></b></h4></label><BR>
                            <label for=" "><h5><b><?php echo "Producto: ".$_SESSION['producto']; ?></b></h5></label> <br>
                            <label for=" "><h5><b><?php echo "Costo: ".$_SESSION['costo']; ?></b></h5></label> <br>
                            <label for=" "><h5><b><?php echo "Cantidad: ".$_SESSION['cantidad']; ?></b></h5></label> <br>
                            <label for=" " style="text-align: center;"><h4><b>Datos del comprador</b></h4></label><br>
                            <label for=" ">Nombre</label>
                            <input class="form-control"type="text" name="nombre">
                            <label for=" ">Apellido</label>
                            <input class="form-control"type="text" name="apellido">
                            <label for=" ">ID</label>
                            <input class="form-control"type="text" name="cedula">

                             <label for=" ">Teléfono</label>
                            <input class="form-control"type="tel" name="tlfhab" placeholder="habitación"><br>
                            <input class="form-control"type="tel" name="tlfcel" placeholder="celular"><br>
                            <input class="form-control"type="tel" name="tlftra" placeholder="trabajo"><br>

                            <label for=" ">Dirección</label>
                            <textarea name="direccion" id="" cols="10" rows="5" class="form-control">  </textarea><br>

                            <label for=" "><h4><b>Forma de pago</b></h4></label><BR>
                            <input type="radio" name="Tpago" checked value="Paypal"> Paypal  
                            <input type="radio" name="Tpago" value="Credito"> Credito
                            
                            <select name="Ttarjeta" class="form-control">
                              <option value="Amex">Amex</option>
                              <option value="Visa">Visa</option>
                              <option value="Master">Master</option>
                            </select>
                            <label for=" ">Nro. Tarjeta</label>
                            <input class="form-control"type="text" name="tarjeta">
                            <label for=" ">Fecha de Vencimiento</label>
                            <input type="date" name="fecha"/><br>
                            <label for=" ">Correo de Paypal</label>
                            <input class="form-control"type="text" name="email">
                        </div> 
                        <div class="panel-footer text-center" style="background-color: light-gray;">
                            <input type="submit" value="Enviar" class="btn btn-primary">
                        </div>
                    </form>
                    <a href="./tienda.php" class="btn btn-primary">Regresar</a>
              </div>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->
   

    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    
    <!-- make it happen -->
        <script>
          $(":date").dateinput();
        </script>
</body>

</html>
