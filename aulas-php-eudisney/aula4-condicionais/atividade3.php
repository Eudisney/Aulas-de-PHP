<?php 

    # Condicionais encadeadas

    // Escreva um algoritmo que receba o nome, peso e altura do usuário, calcule o IMC e apresente ao final: O nome; O peso; A altura; O IMC; A classificação. 

    $idade = 10;

    if(($idade >= 16 && $idade < 18) || $idade >= 70) {echo "<br> Voto facultativo <br>";}

    else if($idade >= 18 && $idade < 70) {echo "<br> Voto obrigatório <br>";}

    else {echo "Não vota";}
    

?>