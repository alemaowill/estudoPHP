<?php 

$alunos = array();
	array_push($alunos, array(
		 'nome'=> "William", 'nota1' => 10, 'nota2' => 8,
		));
	array_push($alunos, array(
		'nome'=> "Anderson",'nota1' => 7, 'nota2' => 9,
	));
	array_push($alunos, array(
		 'nome'=> "Felipe", 'nota1' => 5, 'nota2' => 8,
	));
	array_push($alunos, array(
		  'nome'=> "Douglas",'nota1' => 7, 'nota2' => 7,
	));
	array_push($alunos, array(
		  'nome'=> "Alexandre",'nota1' => 4, 'nota2' => 7
	));

function calculaResultado($n1, $n2){	
	return ($n1+$n2)/2;
}

for ($i=0; $i <=4 ; $i++) { 
	$medias[$i] = array(
		'media' => calculaResultado($alunos[$i]['nota1'],$alunos[$i]['nota2'])
	);
};

for ($i=0; $i <= 4 ; $i++) { 
	print_r($alunos[$i]['nome']);
	echo "\t";
	print_r($medias[$i]['media']);
	echo "\n";
}


 ?>