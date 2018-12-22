<?php 

$vacas = array(8,10,15,35,5);
$vaca_maior=$vacas[0];
$vaca_menor=$vacas[0];

for($x=0; $x <= 4; $x++){

if ($vacas[$x] <= $vaca_menor) {
	$vaca_menor = $vacas[$x];
}
if ($vacas[$x] >= $vaca_maior) {
	$vaca_maior = $vacas[$x];
}
}
echo "VACA MENOR: $vaca_menor";
echo "<br>";
echo "VACA MAIOR $vaca_maior";


 ?>