<?php 

function ola(){


	$argumentos = func_get_args();//pega todos parametros
	return $argumentos;
}

var_dump(ola("Bom dia",10));


 ?>