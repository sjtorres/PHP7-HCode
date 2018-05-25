<?php

$pessoas = [];

array_push($pessoas, [
	'nome' => 'Rafael',
	'idade' => 3,
]);

array_push($pessoas, [
	'nome' => 'Sandro',
	'idade' => 44,
]);

print_r($pessoas[0]['nome']);

?>