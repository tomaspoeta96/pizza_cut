<?php	function nombre_apellido($var){
		$exp="/^[a-z������\s]+$/i";
		return preg_match($exp, $var);
	}
	function fecha_f($var){
		$exp="/^(0?[1-9]|1[0-9]|2[0-9]|3[0-1])(\/|\-)(0?[1-9]|1[0-2])(\/|\-)(19[2-9][0-9]|20[0-1][0-5])$/";
		return preg_match($exp,$var);
	}
	function email_f($var){
		$exp="/^([a-zA-Z\d\-\.]{3,25}@[a-z]{3,15}\.[a-z]{2,4})?$/";
		return preg_match($exp, $var);
	}
	function clave_f($var){
		$exp="/^([a-zA-Z\d_#,;~@%&\\\!\$\^\*\(\)\-\+\=\{\}\[\]\:\'\\<\>\.\?\|]{3,15})?$/";
		return preg_match($exp, $var);
	}
	function calle_f($var){
		$exp="/^([a-z\d\-]+)?$/i";
		return preg_match($exp,$var); 
	}
	function numero_f($var){
		$exp="/^(\d*|S\/N)?$/";
		return preg_match($exp,$var); 
	}
	function piso_f($var){
		$exp="/^(\d*|S\/N|PB)?$/";
		return preg_match($exp,$var); 
	}
	function depto_f($var){
		$exp="/^(\d+|[a-z])?$/i";
		return preg_match($exp,$var); 
	}?>