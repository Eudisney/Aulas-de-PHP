?<?php

    $login = $_POST['login'];
    $senha = $_POST['senha'];

 //   echo "{$login} <br>"; # Debugar
 //   echo "{$senha} <br>";

    while (($senha !== 123456) && ($login !== 'AlunoETC')){
        header('Location: login.php');
    }

    echo "Bem vindo ao sistema!";

?>