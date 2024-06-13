<?php 

function calcularMedia ($nota1, $nota2, $nota3){
    $media = (($nota1 + $nota2 + $nota3)/3);
    return $media;

}

function situacao ($media,$nome){
    echo "Olá {$nome}\n<br>";
    if ($media >= 7){
        echo "A média foi {$media}. <br>\nSituação: Aluno Aprovado";    
    }else if ($media >= 4 && $media < 7){
        echo "A média foi {$media}. <br>\nSituação: Aluno Recuperação";
    }else{
        echo "A média foi {$media}. <br>\nSituação: Aluno Reprovado";
    }

}

# Informações do Formulário

$nome = $_GET["nome"];
$nota1 = $_GET["nota1"];
$nota2 = $_GET["nota2"];
$nota3 = $_GET["nota3"];

$media = calcularMedia ($nota1, $nota2, $nota3);
situacao ($media,$nome);


?>