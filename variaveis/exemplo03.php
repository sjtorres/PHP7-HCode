<?php
// tipos de variaveis
$nome = "Sandro";
$site = 'www.sandrotorres.com.br';

$ano = 1973;
$salario = 5599.99;
$bloqueado = false;

echo "Nome: " . $nome . ", " . "nascido em: " . $ano;
echo "<br/>";

$frutas = ["Maça", "Banana", "Mamão"];
echo $frutas[2];
echo "<br/>";

$nascimento = new DateTime();
var_dump($nascimento);
echo "<br/>";

$arquivo = fopen("exemplo03.php", "r");
var_dump($arquivo);
echo "<br/>";

$nulo = NULL;
echo $nulo;
echo "<br/>";

$vazio = "";
echo $vazio;

?>