<?php
session_start();

// Evalua que la sesión continue verificando una de las variables creadas en control.php,
// cuando esta ya no coincida con su valor inicial se redirije al archivo de salir.php


if ( !$_SESSION['autentificado'] )
{
    header("Location: logout.php");
}

$inactivo = 600;
 
    if(isset($_SESSION['tiempo']) ) {
    $vida_session = time() - $_SESSION['tiempo'];
        if($vida_session > $inactivo)
        {   
            session_destroy();
            header("Location: logout.php");
        }
    }
 
    $_SESSION['tiempo'] = time();
?>
