<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício</title>
</head>
<body>
    <form action="">
            <br> Digite o seu nome: <input type="text" name="nome"> <br><br>
            <br> Digite o seu peso (em kg): <input type="text" name="peso"> <br><br>
            <br> Digite a sua altura (em metros): <input type="text" name="altura"> <br><br>

            <input type="submit" value="verificar">

<?php 

$nome = $_GET["nome"];
$peso = $_GET["peso"];
$altura = $_GET["altura"];

    # Condicionais encadeadas

    // Escreva um algoritmo que receba o nome, peso e altura do usuário, calcule o IMC e apresente ao final: O nome; O peso; A altura; O IMC; A classificação. 

// Calcula o IMC (Índice de Massa Corporal)
$imc = $peso / ($altura * $altura);

// Determina a classificação com base no IMC
$classificacao = "";
if ($imc < 16.9) {
    $classificacao = "Muito abaixo do peso";
} elseif ($imc >= 17 && $imc < 18.4) {
    $classificacao = "Abaixo do peso";
} elseif ($imc >= 18.5 && $imc < 24.9) {
    $classificacao = "Peso normal";
} elseif ($imc >= 25 && $imc < 29.9) {
    $classificacao = "Acima do peso";
} elseif ($imc >= 30 && $imc < 34.9) {
    $classificacao = "Obesidade grau I";
} elseif ($imc >= 35 && $imc < 40) {
    $classificacao = "Obesidade grau II";
}  else {
    $classificacao = "Obesidade grau III";
}

// Apresenta os resultados
echo "<br><br>\nResultados:\n<br><br>";
echo "Nome: $nome\n<br>";
echo "Peso: $peso kg\n<br>";
echo "Altura: $altura metros\n<br>";
echo "IMC: $imc\n<br>";
echo "Classificação: $classificacao\n<br>";
    

?>