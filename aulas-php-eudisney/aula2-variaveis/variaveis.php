<?php

//Declaração de variáveis
$nome = "Pedro";
$numeros = array(1,2,3, "texto"); //O que está dentro de "" (aspas duplas) é considerado texto.
$salario = 1600.55;
$teste = true;

#Impressão com interpolação
echo "O nome é : {$nome} e o salário é: {$salario}";

#Impressão com concatenação
echo "\nNome: ".$nome. " e o salário ".$salario. "\n";

//Impressão com var_dump()
var_dump ($numeros);

//Impressão com print_r()
echo '<pre>';
print_r($numeros);

#Impressão com Boolean
var_dump ($teste);

?>