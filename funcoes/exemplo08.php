<?php

/**
 * @param int $valores
 */
function soma(float...$valores): float {
	// Declaração de tipo de retorno
	return array_sum($valores);
}

echo soma(2, 2);
echo "<br>";
echo soma(22, 25);
echo "<br>";
echo soma(1.6, 1.2);
echo "<br>";

?>