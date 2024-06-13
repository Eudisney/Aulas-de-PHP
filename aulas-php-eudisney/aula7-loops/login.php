<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body{
            background-color: lightsteelblue;
        }

        h1{
            text-align: center;
            font-size: 50px;  
        }

        form{
            text-align: center;
            font-size: 25px;
        }

    </style>
</head>
<body>
    <h1>Login do Sistema</h1>

    <form action="testaSenha.php" method="POST">

        Login: <input type="text" name="login" > <br><br>
        Senha: <input type="password" name="senha" > <br><br>

        <input type="submit" value="Logar" >


    </form>
    
</body>
</html>