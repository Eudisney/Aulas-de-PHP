<?php

// Recebe os dados do formuário e guarda na memória.

#Variáveis Utilizadas:
$nome = $_GET["nome"];

echo "Olá {$nome}";

#Exercício 01
$numero1 = $_GET["numero1"];
$numero2 = $_GET["numero2"];

$soma = $numero1 + $numero2;
$subtracao = $numero1 - $numero2;
$multiplicacao = $numero1 * $numero2;
$divisao = $numero1 / $numero2;

echo "<br><br> Questão 01 <br> O resultado da soma de {$numero1} + {$numero2} é ".$soma;
echo "<br><br> O resultado da subtração de {$numero1} - {$numero2} é ".$subtracao;
echo "<br><br> O resultado da multiplicação de {$numero1} * {$numero2} é ".$multiplicacao;
echo "<br><br> O resultado da divisão de {$numero1} / {$numero2} é ".$divisao;

#Exercício 02
$numero3 = $_GET["numero3"];

$dobro = $numero3 + $numero3;

echo "<br><br> Questão 02 <br> O dobro do número informado {$numero3} é ".$dobro;

#Exercício 03
$numero4 = $_GET["numero4"];
$numero5 = $_GET["numero5"];

$area = $numero4 * $numero5;

echo "<br><br> Questão 03 <br> Para encontrar a área basta multiplicar a base (b) {$numero4} pela altura (h) {$numero5} e encontraremos a área ".$area;

#Exercício 04
$numero6 = $_GET["numero6"];
$numero7 = $_GET["numero7"];

$cotacao = $numero6 / $numero7;

//Para saber, aproximadamente, quantos dólares você terá após a compra, você deve dividir a quantia pela cotação da moeda no dia.

echo "<br><br> Questão 04 <br> O valor de R$ {$numero6} convertido para dólar na contação de {$numero7} será de U$ ".$cotacao;

#Exercício 05
$numero8 = $_GET["numero8"];
$numero9 = $_GET["numero9"];
$numero10 = $_GET["numero10"];
$numero11 = $_GET["numero11"];

$produto = $numero8 + $numero9 + $numero10;
$percentual = $produto - $numero11;
$desconto = ($percentual / $produto) * 100;

echo "<br><br> Questão 05 <br> O valor do produto R$ {$numero8} acrecido do frete R$ {$numero9} e as despesas eventuais R$ {$numero10} é R$ {$produto}";

echo "<br> A porcentagem de lucro na compra foi de {$desconto}% referente ao valor de venda informado R$ {$numero11} <br>";

#Exercício 06
$numero12 = $_GET["numero12"];

$raio = $numero12 * 3.14; # 3,14 seria o valor Pi.
$circulo = pow($raio,2);

// A área de um círculo é pi vezes o raio elevado ao quadrado (A = π r²).

echo "<br><br> Questão 06 <br> Para o raio da circunferência informado {$numero12}, a área do circulo é {$circulo}";


#Exercício 07
$dia = $_GET["dia"];
$mes = $_GET["mes"];
$ano = $_GET["ano"];


echo "<br><br> Questão 07 <br> A idade expressa em dias é ".$dias;

#Exercício 08
$salario = $_GET["salario"];
$reajuste = $_GET["reajuste"];

$totalReajuste = ($salario * $reajuste) / 100;
$totalValor = $salario + $totalReajuste;

echo "<br><br> Questão 08 <br> O salário informado foi R$ {$salario} e o percentual de reajustado de {$reajuste}%, o valor do salário reajustado é R$ {$totalValor}";

#Exercício 09
$numero13 = $_GET["numero13"];

# Distribuidor = 28% e Impostos = 45%

$totalCarro = $numero13 * 0.28 * 0.45;
$totalPago = $numero13 + $totalCarro;

echo "<br><br> Questão 09 <br> O valor do carro informado foi R$ {$numero13} acrecido dos percentuais de 28% do distribuidor e 45% dos impostos o que resultou no valor total do carro de R$ {$totalPago}";

#Exercício 10
$numero14 = $_GET["numero14"];
$numero15 = $_GET["numero15"];
$numero16 = $_GET["numero16"];
$numero17 = $_GET["numero17"];

# Salário Fixo + Comissão Fixa + % sobre venda

$totalVenda = ($numero15 * $numero16) / 100; 
$totalRecebido = ($numero17 * 0.05);
$totalSalario = $totalVenda + $totalRecebido;

echo "<br><br> Questão 10 <br> O valor do salário fixo informado foi R$ {$numero14} acrecido dos percentuais de {$numero15}% de comissão sobre cada carro vendido e 5% fixo sobre o valor das vendas realizadas o que resultou no valor total do salário de R$ {$totalSalario}";


?>