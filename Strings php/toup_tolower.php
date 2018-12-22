<?php 

$nome = "william ell";
$nome2 = strtoupper($nome);//tudo para maiuscula
$nome3 = strtolower($nome);//tudo para minuscula
$nome4 = ucwords($nome); //primeira letra de cada palavra fica maiuscula
$nome5 = ucfirst($nome); //primeira letra de toda frase fica maiuscula
$nome6 = str_replace("l", "h", $nome); //substitui letras da variavel

echo "$nome6";


 ?>