<?php

/**
 * @param $texto
 */
function ola($texto = "mundo", $periodo = "Bom dia!") {
	return "Olá $texto! $periodo<br>";
}

echo ola();
echo ola("");
echo ola("Isabela", "Boa Tarde!");
echo ola("Gabriela", "Boa noite!");
echo ola("Rafael", "");

?>