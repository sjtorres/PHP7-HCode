<?php

$a = 10;

/**
 * @param $a
 */
function trocaValor(&$a) {

	$a += 50;
	return $a;

}

echo trocaValor($a);

echo "<br>";

echo trocaValor($a);

echo "<br>";

echo $a;

?>