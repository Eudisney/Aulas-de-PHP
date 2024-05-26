<?php

// Recebe os dados do formuário e guarda na memória.

#Variáveis Utilizadas:
$nome = $_GET["nome"];

echo "Olá {$nome}";

#Exercício 01
$dia = $_GET["dia"];

switch ($dia)

{
    case 1: 
        echo "<br><br> Domingo <br>"; 
        break;
    case 2: 
        echo "<br><br> Segunda-feira <br>";  
        break;
    case 3: 
        echo "<br><br> Terça-feira <br>";  
        break;
    case 4: 
        echo "<br><br> Quarta-feira <br>"; 
        break;
    case 5: 
        echo "<br><br> Quinta-feira <br>"; 
        break;
    case 6: 
        echo "<br><br> Sexta-feira <br>";  
        break;
    case 7: 
        echo "<br><br> Sábado <br>";  
        break;
    case 8: 
        echo "<br><br> Domingo <br>";
    
    default: echo "<br><br> Opção incorreta! <br>";
    
}

?>