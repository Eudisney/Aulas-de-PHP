<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Case</title>
</head>
<body>

    <form action="recebeDados1.php" method= "get">

    Digite seu nome: <input type="text" name="nome" size="50"> <br><br>

    Digite o Estado Civil: <select name="estadoCivil"> 
        <option value="0">Escolha uma opção</option>
        <option value="1">Solteiro</option>
        <option value="2">Casado</option>
        <option value="3">Divorciado</option>
        <option value="4">Viuvo</option>
        <option value="5">União Estavel</option>
    </select> <br><br>
    

    <input type="submit" value="enviar">


    </form>

    
</body>
</html>