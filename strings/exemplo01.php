<?php
// interpolação de variaveis
$nome = "SandroTorres";
$nome2 = 'Desenvolvedor';

var_dump($nome, $nome2);
echo "<br>";

echo "Nome: $nome"; // usando aspas duplas: aceita a variavel
echo "<br>";
echo 'Nome: $nome'; // usando aspas simples: não aceita a variavel

?>