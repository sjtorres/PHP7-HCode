<?php

$hirarquia = [
	[
		'nome_cargo' => 'CEO',
		'subordinados' => [
			// Inicio: Diretor Comercial
			[
				'nome_cargo' => 'Diretor Comercial',
				'subordinados' => [
					// Inicio: Gerente de Vendas
					[
						'nome_cargo' => 'Gerente de Vendas',
					],
					// Termino: Gerente de Vendas
				],
			],
			// Termino: Gerente Comercial
			// Inicio: Diretor Financeiro
			[
				'nome_cargo' => 'Diretor Financeiro',
				'subordinados' => [
					// Inicio: Gerente de Contas a Pagar
					[
						'nome_cargo' => 'Gerente de Contas a Pagar',
						'subordinados' => [
							// Inicio: Supervisor de Pagamentos
							[
								'nome_cargo' => 'Supervisor de Pagamentos',
							],
							// Termino: Supervisor de Pagamentos
						],
					],
					// Termino: Gerente de Contas a Pagar
					// Inicio: Gerente de Compras
					[
						'nome_cargo' => 'Gerente de Compras',
						'subordinados' => [
							// Inicio: Supervisor de Suprimentos
							[
								'nome_cargo' => 'Supervisor de Suprimentos',
							],
							// Termino: Supervisor de Suprimentos
						],
					],
					// Termino: Gerente de Compras
				],
			],
			// Termino: Diretor Financeiro
		],
	],
];

/**
 * @param $cargos
 * @return mixed
 */
function exibe($cargos) {

	$html = '<ul>';

	foreach ($cargos as $cargo) {

		$html .= "<li>";
		$html .= $cargo['nome_cargo'];

		if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0) {
			$html .= exibe($cargo['subordinados']);
		}

		$html .= "</li>";
	}

	$html .= "</ul>";

	return $html;
}

echo exibe($hirarquia);

?>