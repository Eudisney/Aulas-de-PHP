<?php 

    $numero = 5;
    $resultado;
    $resultado1;

    // Repetição com o FOR.

    for ($i = 0; $i <= 10; $i++){
        $resultado = $numero * $i;
        echo "\n{$numero} x {$i} = {$resultado}";
        
    }

        echo "\n-----------------";
    
    for ($i = 1; $i <= 10; $i++){
        for ($j = 0; $j <= 10; $j++){
            $resultado1 = $i * $j;
            echo "\n{$i} x {$j} = {$resultado1}";
            
        }
            echo "\n-----------------";
    }