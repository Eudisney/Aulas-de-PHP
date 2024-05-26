<?php

// Recebe os dados do formuário e guarda na memória.

$nome = $_GET["nome"];
$numero1 = $_GET["numero1"];
$numero2 = $_GET["numero2"];

$soma = $numero1 + $numero2;

echo "Olá {$nome}";
echo "<br> O resultado da operação é ".$soma;


?>