<?php

// Operadores de atribuição aritmética

// Incremento em 1 unidade: ++
// Decremento em 1 unidade: --
// Incremento genérico: +=
// Decremento genérico: -=
// Atribuição com multiplicação: *=
// Atribuição com divisão: /=

$valor = 10;
$valor ++; # Soma 1 ao valor anterior

$valor1 = 10;
$valor1 --; # Subtrai 1 do valor anterior

$valor2 = 10;
$valor2 += 10; # Soma 10 ao valor anterior

$valor3 = 10;
$valor3 -= 10; # Subtrai 10 do valor anterior

$valor4 = 10;
$valor4 *= 2; # Multiplica por 2 o valor anterior

$valor5 = 10;
$valor5 /= 2; # Dividi por 2 o valor anterior

echo "\n" .$valor;
echo "\n" .$valor1;
echo "\n" .$valor2;
echo "\n" .$valor3;
echo "\n" .$valor4;
echo "\n" .$valor5;

?>