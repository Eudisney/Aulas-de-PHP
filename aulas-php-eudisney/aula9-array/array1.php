<?php 

// Matriz - Array Associativo

$dados = array (
    array("Nome" => "Joao", "Idade" => 10),
    array("Nome" => "Pedro", "Idade" => 20),
    array("Nome" => "Maria", "Idade" => 50),
    array("Nome" => "Lucas", "Idade" => 2),
);

foreach ($dados as $d){
    echo "\nNome: ".$d['Nome']. " Idade: ".$d['Idade'];
}

?>