<?php 


function soma(int ...$valores):float{//pega todos parametros(declaração de tipos escalaveis), faz todos virarem float,tipo cast


return array_sum($valores);//soma todos do array
}

echo var_dump(soma(2.2,2));
echo "<br>";
echo soma(30,35,10,20,10,15,5);
echo "<br>";
echo var_dump(soma(1.5,5.2));

 ?>