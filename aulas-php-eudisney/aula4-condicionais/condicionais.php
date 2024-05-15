
<?php 
    $numero = $_GET["numero"];

    echo "<br> {$numero} <br>";

    if($numero % 2 == 0) {echo "<br> O número {$numero} é par. <br>";}

    else { echo "<br> O número {$numero} é impar. <br>";}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais</title>
</head>
<body>
    <form action="">
            <br> Número: <input type="text" name="numero"> <br><br>

            <input type="submit" value="verificar">



    </form>


</body>
</html>