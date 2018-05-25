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

echo json_encode($pessoas);

?>