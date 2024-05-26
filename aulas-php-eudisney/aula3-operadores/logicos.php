<?php 

# Operadores Aritméticos: + - / * %
// Relacionais: >, <, >=, <=, ==, !=
/* Lógicos: && (e),||(ou),! (negação) */ 

# Tabela Verdade: Negação (!) V=F F=V , Conjunção (&&) VV=V , Disjunção (||) FF=F

$res = (10 > 5) && (10 == 20);

$res1 = (10 > 5) || (10 == 20);

$res2 = (10 > 5) && (!10 == 20);

$res3 = !$res2;

var_dump($res);
var_dump($res1);
var_dump($res2);
var_dump($res3);

?>