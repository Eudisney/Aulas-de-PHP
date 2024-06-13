<?php 
    // Definição de procedimento
    function soma ($n1, $n2){

        $resultado = $n1 + $n2;
        echo "\nSoma: {$resultado}\n";

    }

    // Definição de função

    function sub($num1, $num2){

        $resultado = $num1 - $num2;
        return $resultado;
        
    }

    function calcular ($n1, $n2){
        echo "\nO resultado da soma:";
        soma ($n1, $n2);
        $resultadoSub = sub ($n1, $n2);
        echo "\nSubtração: {$resultadoSub}";


    }

    // Chamada da função ou invocação

    soma (1,1);
    soma (5,20);

    $retornoFuncao = sub (5,2);

    echo "\nRetorno: {$retornoFuncao}\n";
    calcular (10,4);
?>