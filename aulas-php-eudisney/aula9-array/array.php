<?php 

// Vetor ou array indexado

// Declaração

$numeros = array (10,20,30,40);

foreach ($numeros as $n){
    echo "$n\n";
    echo " ". $numeros[3];
}

?>


<?php 

foreach ($numeros as $n){
    echo "$n\n";
}

for ($i = 0; $i < count ($numeros); $i++){
    echo "\n $numeros[$i]";
}

?>