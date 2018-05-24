<?php

// include "exemplo01.php"; // Include: Se o arquivo der problema ele procura uma solução
//    ele permite acesso ao include path e ao include dinâmico
require_once "inc/exemplo01.php"; // Require: obriga que o arquivo exista e esteja correto
require_once "inc/exemplo01.php"; // require_once: não deixa o arquivo ser chamado 2x

$resultado = somar(10, 25);
echo $resultado;

?>