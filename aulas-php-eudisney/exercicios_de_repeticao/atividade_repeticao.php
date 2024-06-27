/*1. Faça um programa que leia um número inteiro positivo N e imprima todos os números naturais de 0 até N em ordem crescente. */

<?php

// Supondo que N seja um número inteiro positivo fornecido pelo usuário

$N = 10; // Exemplo de valor para N
$i = 0; // Inicializa o contador

while ($i <= $N) {
    echo $i . "\n"; // Imprime o número atual seguido de uma quebra de linha
    $i++; // Incrementa o contador
}
?>

/*2. Faça um programa que leia um número inteiro positivo N e imprima todos os números naturais de 0 até N em ordem decrescente. */

<?php

// Supondo que N seja um número inteiro positivo fornecido pelo usuário

$N = 50; // Exemplo de valor para N

do {
    echo $N . "\n"; // Imprime o número atual seguido de uma quebra de linha
    $N--; // Decrementa o contador
} while ($N >= 0);

?>

/*3. Faça um programa que leia um número inteiro N e depois imprima os N primeiros números naturais ímpares (sem usar comando condicional). */

<?php

// Supondo que N seja um número inteiro fornecido pelo usuário

$N = 100; // Exemplo de valor para N

for ($i = 1; $i <= 2 * $N; $i += 2) {
    echo $i . "\n"; // Imprime o número ímpar atual seguido de uma quebra de linha
}

?>

/* Este código imprime os primeiros $N números ímpares começando de 1. Como cada número ímpar é sempre 2 unidades maior que o anterior, o loop incrementa $i por 2 a cada iteração. Lembre-se de substituir o valor de $N pelo número inteiro que você deseja usar. */

/*4. Faça um programa que determine e mostre os cinco primeiros múltiplos de 3 considerando números maiores que 0. */

 <?php

// Inicializa a contagem de múltiplos

$contador = 0;

for ($i = 1; $contador < 5; $i++) {
    $multiplo = 3 * $i; // Calcula o múltiplo de 3
    echo $multiplo . "\n"; // Imprime o múltiplo
    $contador++; // Incrementa o contador de múltiplos encontrados
}

?>