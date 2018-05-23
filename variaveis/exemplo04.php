<?php
// variávei pre-definidas também conhecidas como arrays globais
$nome = (int) $_GET["a"];
var_dump($nome);

$ip = $_SERVER["REMOTE_ADDR"];
echo $ip;

$arquivo = $_SERVER["SCRIPT_NAME"];
echo $arquivo;
?>