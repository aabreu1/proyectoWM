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
include_once('mysql-config.php');
session_start();
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
					<i class="fa fa-check"></i> usuario logueado
					<a href="user-config.php" class="btn btn-default">Continuar</a>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>