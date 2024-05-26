<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais IF e ELSE</title>
</head>
<body>
    <form action="">
            <br> Informe o nome: <input type="text" name="nome"> <br><br>
            <br> Informe a idade: <input type="text" name="numero"> <br><br>

            <input type="submit" value="verificar">



    </form>


</body>
</html>


<?php 
    $nome = $_GET["nome"];
    $numero = $_GET["numero"];

    if($numero >= 18) {echo "<br> A idade informado foi {$numero}, portanto {$nome} é maior de idade. <br>";}

    else { echo "<br> A idade informado foi {$numero} anos, portanto {$nome} é menor de idade.";}


?>