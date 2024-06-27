<?php 

/* A prefeitura de uma cidade fez uma pesquisa entre os seus habitantes, coletando dados sobre o salário e número de filhos. Faça um procedimento que leia esses dados para um número não determinado de pessoas e retorne a média de salário da população, a média do número de filhos, o maior salário e o percentual de pessoas com salário até R$350,00. */

// Dados da pessoas da cidade

$dados = [
    ['salario' => 500, 'filhos' => 1],
    ['salario' => 1000, 'filhos' => 8],
    ['salario' => 300, 'filhos' => 2],
    ['salario' => 350, 'filhos' => 7],
    ['salario' => 250, 'filhos' => 3],
    ['salario' => 150, 'filhos' => 6],
    ['salario' => 310, 'filhos' => 5],
    ['salario' => 330, 'filhos' => 0],

];

// Função para calcular

function estatistica($dados){
    $somaSalario = 0;
    $somaFilhos = 0;
    $totalPessoas = count ($dados);
    $maiorSalario = 0;
    $salariosAte350 = 0;

    foreach ($dados as $p){
        $salario = $p ['salario'];
        $filhos = $p ['filhos'];

        $somaSalario += $salario;
        $somaFilhos += $filhos;

        if ($salario > $maiorSalario){
            $maiorSalario = $salario;
        }
        if ($salario <= 350){
            $salarioAte350++;
        }

    }

    $mediaSalario = $somaSalario/$totalPessoas;
    $mediaFilhos = $somaFilhos/$totalPessoas;

    $porcentagemSalario350 = ($salarioAte350/$totalPessoas)*100;

    echo "A média do salário da população: R$".number_format($mediaSalario,2)."\n";
    echo "O maior do salário: R$".number_format($mediaSalario,2)."\n";
    echo "A média de números de filhos: ".number_format($mediaFilhos). "\n";
    echo "A porcentagem de pessoas com salário até R$ 350,00: ".number_format($porcentagemSalario350)."%";
}   

# Chamar a função
estatistica($dados);


?>