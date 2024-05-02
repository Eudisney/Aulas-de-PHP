<?php 

# Operadores Aritméticos: + - / * %
// Relacionais: >, <, >=, <=, ==, !=
/* Lógicos: && (e),||(ou),! (não) */ 

$num1 = 10;
$num2 = 20;
$divisao = $num1 / $num2;
$multiplicacao = $num1 * $num2;
$subtracao = $num1 - $num2;
$modulo = $num2 % $num1; // Resto da divisão
$media = (($num1 + $num2)/2) + 10;

$soma = $num1 + $num2;

echo "\nA soma é: {$soma}";

echo "\nA divisão é: {$divisao}";

echo "\nA multiplicação é: {$multiplicacao}";

echo "\nA subtração é: {$subtracao}";

echo "\nO resto da divisão é: {$modulo}";

echo "\nA média é: {$media}";

?>