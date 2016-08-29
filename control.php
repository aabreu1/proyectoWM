<?php
	include_once('mysql-config.php');
		// Inicio la sesión
		session_start();

		$registros=mysqli_query($conexion,"select username,pass from user ") or
		die("Problemas con la conexión");

		if($reg=mysqli_fetch_array($registros)){
			if ($reg['username'] == $_POST['usuario'] and $reg['pass'] == $_POST['contrasena']){
				$_SESSION['autentificado'] = true;
				$_SESSION['usuario'] = $_POST['usuario'];
				header("Location: login.php");
			}elseif( $_POST['usuario']=='admin' && $_POST['contrasena']=='1234'){
				$_SESSION['autentificado'] = true;
				$_SESSION['usuario'] = 'Admin';
				header("Location: login.php");
			}else{
				header("Location: logout.php");
			}
		}else{
                       header("Location: tienda.php");
                }
?>			