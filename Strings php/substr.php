<?php 

$frase = "A repetição é a mãe da retenção.";
$q = strpos($frase, "mãe"); //retorna o índice onde fica a palavra buscada
$texto = substr($frase, 0, $q); // retorna a parte que vc precisa de um texto
$textoFinal = substr($frase, $q+4, strlen($frase)); //retorna parte final do texto

var_dump($q);
var_dump($texto);
var_dump($textoFinal);



 ?>