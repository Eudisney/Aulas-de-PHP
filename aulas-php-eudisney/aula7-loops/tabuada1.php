<?php 

    $numero = 5;
    $contador = 1;
    $resultado;

    // Repetição com teste no final.

    do {
        $resultado = $numero * $contador;
        echo "\n{$numero} x {$contador} = {$resultado}";
        $contador++;
    
    } while ($contador <= 10);

    
?>