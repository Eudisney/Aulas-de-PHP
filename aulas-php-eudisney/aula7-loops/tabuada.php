<?php 

    $numero = 2;
    $contador = 1;
    $resultado;

    // Repetição com teste no início.

    while ($contador <= 10) {
        $resultado = $numero * $contador;
        echo "\n{$numero} x {$contador} = {$resultado}";
        $contador++;

    }
    
?>