<?php 
    function calcularImc ($peso, $altura){
        $imc = $peso / (pow($altura,2));
        return $imc;

    }

    function situacao ($imc){
        if ($imc < 16){
            echo "O imc é {$imc}. <br>\nSituação: Baixo peso";    
        }else if ($imc >= 16 && $imc <= 25){
            echo "O imc é {$imc}. <br>\nSituação: Saudável";
        }else if ($imc > 25 && $imc < 29){
            echo "O imc é {$imc}. <br>\nSituação: Sobrepeso";
        }else{
            echo "O imc é {$imc}. <br>\nSituação: Obeso";
        }

    }

    # Informações do Formulário

    $peso = $_GET["peso"];
    $altura = $_GET["altura"];

    $imc = calcularImc ($peso, $altura);
    situacao ($imc);


?>