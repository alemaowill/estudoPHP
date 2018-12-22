<?php 


function soma(int ...$valores){//pega todos parametros


return array_sum($valores);
}

echo soma(2,2);
echo "<br>";
echo soma(30,35,10,20,10,15,5);
echo "<br>";
echo soma(1.5,5);

 ?>