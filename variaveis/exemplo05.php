<?php
// Escopo global
$nome = "Sandro";
function teste() {
	global $nome;
	echo $nome;
	echo "<br/>";
}

function teste2() {
	$nome = "Rafael";
	echo $nome . " na function 2!";
}

teste();
teste2();

?>