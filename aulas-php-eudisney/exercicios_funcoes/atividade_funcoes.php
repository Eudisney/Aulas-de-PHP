 
/*1. Escreva um procedimento que recebes 3 valores reais X, Y e Z e que verifique se esses valores podem ser os comprimentos dos lados de um triângulo e, neste caso, retornar qual o tipo de triângulo formado. Para que X, Y e Z formem um triângulo é necessário que a seguinte propriedade seja satisfeita: o comprimento de cada lado de um triângulo é menor do que a soma do comprimento dos outros dois lados. O procedimento deve identificar o tipo de triângulo formado observando as seguintes definições:

Triângulo Equilátero: os comprimentos dos 3 lados são iguais.
Triângulo Isósceles: os comprimentos de 2 lados são iguais.
Triângulo Escaleno: os comprimentos dos 3 lados são diferentes */

<?php

function verificarTriangulo($x, $y, $z) {
    // Verifica se os valores formam um triângulo
    if ($x + $y > $z && $x + $z > $y && $y + $z > $x) {
        // Verifica o tipo de triângulo
        if ($x == $y && $y == $z) {
            return "Triângulo Equilátero\n"; # Três lados iguais
        } elseif ($x == $y || $x == $z || $y == $z) {
            return "Triângulo Isósceles\n"; # Dois lados iguais
        } else {
            return "Triângulo Escaleno\n"; #Três lados diferentes
        }
    } else {
        return "Não é um triângulo válido\n";
    }
}

// Exemplo de uso
$x = 5;
$y = 5;
$z = 5;

$tipoTriangulo = verificarTriangulo($x, $y, $z);
echo "Resultado: " . $tipoTriangulo;

?>

/*2. Faça um procedimento que recebe 3 valores inteiros por parâmetro e retorna-os ordenados em ordem crescente. */

<?php 

function ordenar ($x, $y, $z){
    if ($x < $y && $x < $z){
        echo " ".$x;
        if ($y < $z){
            echo " ".$y." ".$z;    
        }else{
            echo " ".$z." ".$y;
        }
    }else if ($y < $x && $y < $z){
        echo " ".$y;
        if ($x < $z){
            echo " ".$x." ".$z;
        }else{
            echo " ".$z." ".$x;
        }
    }else{
        echo " ".$z;
        if ($x < $y){
            echo " ".$x." ".$y;
        }else{
            echo " ".$y." ".$x;
        }
    }

}

ordenar (35, 16, 1);

?>

<?php
function ordenarValores($a, $b, $c) {
    if ($a > $b) {
        $temp = $a;
        $a = $b;
        $b = $temp;
    }
    if ($b > $c) {
        $temp = $b;
        $b = $c;
        $c = $temp;
    }
    if ($a > $b) {
        $temp = $a;
        $a = $b;
        $b = $temp;
    }
    return [$a, $b, $c];
}

// Exemplo de uso:
$valores = ordenarValores(5, 2, 8);
echo "Valores ordenados: " . implode(", ", $valores);

?>

/*3. A prefeitura de uma cidade fez uma pesquisa entre os seus habitantes, coletando dados sobre o salário e número de filhos. Faça um procedimento que leia esses dados para um número não determinado de pessoas e retorne a média de salário da população, a média do número de filhos, o maior salário e o percentual de pessoas com salário até R$350,00. */

<?php

function calcularEstatisticas($dadosPessoas) {
    $totalPessoas = count($dadosPessoas);
    $somaSalarios = 0;
    $somaFilhos = 0;
    $maiorSalario = 0;
    $pessoasAte350 = 0;

    foreach ($dadosPessoas as $pessoa) {
        $salario = $pessoa['salario'];
        $filhos = $pessoa['filhos'];

        // Calcula a soma dos salários
        $somaSalarios += $salario;

        // Calcula a soma do número de filhos
        $somaFilhos += $filhos;

        // Verifica se o salário é o maior encontrado até agora
        $maiorSalario = max($maiorSalario, $salario);

        // Verifica se o salário está abaixo de R$350,00
        if ($salario <= 350) {
            $pessoasAte350++;
        }
    }

    // Calcula as médias
    $mediaSalario = $somaSalarios / $totalPessoas;
    $mediaFilhos = $somaFilhos / $totalPessoas;

    // Calcula o percentual de pessoas com salário até R$350,00
    $percentualAte350 = ($pessoasAte350 / $totalPessoas) * 100;

    // Exibe os resultados
    echo "Média de salário da população: R$" . number_format($mediaSalario, 2, ',', '.') . "\n";
    echo "Média do número de filhos: " . number_format($mediaFilhos, 2, ',', '.') . "\n";
    echo "Maior salário: R$" . number_format($maiorSalario, 2, ',', '.') . "\n";
    echo "Percentual de pessoas com salário até R$350,00: " . number_format($percentualAte350, 2, ',', '.') . "%\n";
}

// Exemplo de uso
$dadosPessoas = [
    ['salario' => 500, 'filhos' => 2],
    ['salario' => 300, 'filhos' => 1],
    // Adicione mais dados de pessoas aqui
];

calcularEstatisticas($dadosPessoas);

?>


?>