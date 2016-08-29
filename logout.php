<html>
<head>
	<!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!--Font Awesome-->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
<?php 

session_start();
$_SESSION['usuario'] = "";
$_SESSION['autentificado'] = false;
?>

<script>
	$(document).ready(function(){
		$("#modal").modal("show");
	})
</script>
<div class="modal fade" id="modal">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-body">
				<div class="text-center">
					<i class="fa fa-check"></i> su Sesion ha expirado
					<a href="tienda.php" class="btn btn-default">Volver</a>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>