<?php 

$hierarquia = array(
	array(
		'nome_cargo' => 'CEO',
		'subordinados' => array(
				//inicio diretor Comercial
				array(
					'nome_cargo' => 'Diretor Comercial',
					'subordinados' => array(
						//Inicio Gerente de vendas
						array(
							'nome_cargo'=>'Gerente de vendas'
						)
						//Termino Gerente de vendas
					)
				),
				//termino Diretor Comercial
				//Inicio Diretor Financeiro
				array(
					'nome_cargo' => 'Diretor Financeiro',
					'subordinados' => array(
						//Inicio Gerente de contas à pagar
						'nome_cargo' => 'Gerente de contas a pagar',
						'subordinados' => array(
							//Inicio Supervisor
							'nome_cargo' => 'Supervisor de Pagamentos'
						)
						
						//Termino Supervisor
					),
					//Termino gerente de contas a pagar
					//Inicio Gerente de compras
					array(
						'nome_cargo' => 'Gerente de compras',
						'subordinados' => array(
							//Inicio Supervisor de suprementos
							array(
								'nome_cargo' =>'Supervisor de suprimentos'

							)
							//Termino Supervisor de suprementos
						)


					)
					//Termino Gerente de compras
				)
				//Termino Diretor Financeiro
		)


	)

);

function exibe($cargos){

	$html = '<ul>';

		foreach ($cargos as $cargo) {

			$html.= "<li>";
			$html .= $cargo["nome_cargo"];

			if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0){

				$html .= exibe($cargo['subordinados']);

			}

			$html .= "</li>";
		}


	$html .="</ul>";

	return $html;
}

echo exibe($hierarquia);

 ?>