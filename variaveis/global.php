<?php 
$nome = "William";
global $nome;//nao funfa

function teste(){
	global $nome;//funfa
	echo $nome;
}

teste();

 ?>