<?php error_reporting(E_ERROR | E_PARSE);
    include_once('sesion.php');
?>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" href="img/icon_dota2.png"> 
    <title>DOTA2 Network</title>

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

   

    <!-- Page Content -->
    <div class="container col-md-4 col-md-offset-1">
        <form action="" method="POST">


                <label for=" "><h4><b>Datos del comprador</b></h4></label><br>
    				<label><?php echo "Nombre: ".$_SESSION['nombre']." ".$_SESSION['apellido']; ?></label>
    				<label><?php echo "Cedula: ".$_SESSION['cedula']; ?></label>
    				<label><?php echo "Direccion: ".$_SESSION['direccion']; ?></label>
    				<label><?php echo "Tlf. Hab: ".$_SESSION['tlfhab']; ?></label>
    				<label><?php echo "Tlf. Cel: ".$_SESSION['tlfcel']; ?></label>
    				<label><?php echo "Tlf. Trabajo: ".$tlftra; ?></label>

                <label for=" "><h4><b>Datos del Producto</b></h4></label><br>
                    <label><?php echo "Producto : ".$_SESSION['producto']."           ".$_SESSION['costo']; ?></label>
                     <label><?php echo "Subtotal :                x".$_SESSION['cantidad']."  ".$_SESSION['costo']*$_SESSION['cantidad']; ?></label>
                    <label><?php echo "IVA. (12%):                 ".$_SESSION['costo']*$_SESSION['cantidad']*0.12?></label>
                    <label><?php echo "TOTAL: ".$_SESSION['costo']*$_SESSION['cantidad']*1.12?></label>

                <label for=" "><h4><b>Datos del Pago</h4></b></label><br>
                    <label><?php echo "Tipo de Pago: ".$_SESSION['Tpago']; ?></label>
                    <label><?php echo "Ttarjeta: ".$_SESSION['Ttarjeta']; ?></label>
                    <label><?php echo "tarjeta: ".$_SESSION['tarjeta']; ?></label>
                    <label><?php echo "email: ".$_SESSION['email']; ?></label>

                 </div>
                    <div class="panel-footer text-center" style="background-color: light-gray;">
                    <input type="submit" value="Imprimir" class="btn btn-primary">
        </form>
          <a href="./formulario de pago.html" class="btn btn-primary">Segir Comprando</a>

    </div>
    <!-- /.container -->
   

    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>