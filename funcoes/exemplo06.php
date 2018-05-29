<?php

$pessoa = [

	'nome' => 'Sandro',
	'idade' => 44,

];

foreach ($pessoa as &$value) {
	// passagem de parametros por referencia
	if (gettype($value) === 'integer') {
		$value += 10;
	}

	echo $value . "<br>";
}

print_r($pessoa);

?>