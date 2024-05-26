<?php 

    # Condicionais encadeadas

    $idade = 10;

    if(($idade >= 16 && $idade < 18) || $idade >= 70) {echo "<br> Voto facultativo <br>";}

    else if($idade >= 18 && $idade < 70) {echo "<br> Voto obrigatório <br>";}

    else {echo "Não vota";}
    

?>