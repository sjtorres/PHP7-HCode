<?php
/* Exemplo
de comentário
de varias linhas */

// Exemplo de comentários de uma unica linha

$nome = "Sandro";
$sobrenome = "Torres";
$nomeCompleto = $nome . " " . $sobrenome;
echo $nomeCompleto;
exit; // finaliza o comando, não executando mais nada abaixo.

$anoNascimento = 1973;
$nomeCompleto = "Sandro";

echo $nomeCompleto;
echo "<br/>";
echo $anoNascimento;

echo "<br/>";

unset($anoNascimento); // unset: elimina a variavel da memoria
if (isset($anoNascimento)) {
	// isset: verifica se a variavel foi definida
	echo $anoNascimento;
} else {
	echo "Ano não foi informado!";
}
echo "<br/>";

?>