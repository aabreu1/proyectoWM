<?php
//funcion para sumar dos valores
function suma($A,$B){
	$C=$A+$B;
	return $C;
}

// funcion para validad un entero
function validaEntero ($texto) {
// prueba si la entrada es un entero, sin signo
return preg_match("/^[0-9]+$/", $texto );
}

// funcion para validad un entero con signo opcional
function validaEnteroConSigno ($Cad) {
// prueba si la entrada es un entero, con un signo opcional
return preg_match("/^-?([0-9])+$/", $Cad );
}

// funcion para validad cadenas alfabeticas con espacio
function validaAlfaEsp ($Cad) {
// prueba si la entrada son cadenas alfabeticas con espacio
// preg_match realiza búsquedas en cadenas de texto mediante expresiones regulares. Devolverá el valor booleano.
return preg_match("/^[a-z ]*$/i", $Cad );
}
	
// funcion para validad una cadena alfabetica
function validaAlfa ($Cad) {
// prueba si la entrada es una cadena alfabetica
return preg_match("/^[a-z]+$/i", $Cad );
}
	
// funcion para validad una cadena alfanumerica
function validaAlfaNum ($Cad) {
// prueba si la entrada es una cadena alfanumerica
return preg_match("/^[a-z0-9]*$/i", $Cad );
}

// funcion para validad un numero de punto flotante
function validarFlotante ($Cad) {
// prueba si la entrada es un numero de punto flotante, con un signo opcional
return preg_match("/^-?([0-9])+([\.|,]([0-9])*)?$/", $Cad );
}

// Funcion para validar una direccion de correo electronico
function validarDirCorreoElec ($Cad) {
// prueba si la entrada coincide con los patrones de correo electronico
return preg_match("/^([a-z0-9_-])+([\.a-z0-9_-])*@([a-z0-9-])+(\.[a-z0-9-]+)*\.([a-z]{2,6})*$/i", $Cad );
}


?>