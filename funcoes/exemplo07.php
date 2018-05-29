<?php

/**
 * @param int $valores
 */
function soma(int...$valores) {
	return array_sum($valores);
}

echo soma(2, 2);
echo "<br>";
echo soma(22, 25);
echo "<br>";
echo soma(1.6, 1.2);
echo "<br>";

?>