<?php

//Array de objeto
$hierarquia = array(

	array(
		'nome_cargo'=>'CEO',
		'subordinados'=>array(
					//inicio diretor comercial
				array(
					'nome_cargo'=>'Diretor Comercial',
					'subordinados'=>array(
					//Início gerente de vendas
						array(
						'nome_cargo'=>'Gerente de vendas'
							)
					//Fim gerente de vendas	
					)
					),
					//Fim diretor comercial


				array(
					'nome_cargo'=>'Diretor financeiro',
					'subordinados'=>array(

							array(

								'nome_cargo'=>'Gerente de contas a pagar',
								
							)

					)

				),

		)


	)



);

function exibe($cargos){

	$html = '<ul>';

		foreach ($cargos as $cargo) {
			
			$html .= "<li>";
			$html .= $cargo['nome_cargo'];
			
			if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0){

				$html .= exibe($cargo['subordinados']);

			}

			$html .= "</li>";


		}

	$html .= '</ul>';

	return $html;

}

echo exibe($hierarquia);

?>