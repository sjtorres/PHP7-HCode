<?php

$resultado = (10 + 3) / 2 > 5 && 10 + 5 < 3; //  E: os dois tem que ser verdadeiros
var_dump($resultado);
echo "<br>";

$resultado = (10 + 3) / 2 > 5 || 10 + 5 < 3; // OU: um ou outro poden ser verdadeiros
var_dump($resultado);
?>