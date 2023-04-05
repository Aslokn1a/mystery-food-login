<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mystery Food</title>
    <style>
        body 
        {
            height:100vh;
            width:100vw;
            margin:0;
            display:flex;
            align-items:center;
            align-content:center;
            justify-items:center;
            justify-content:center;
        }
    </style>
</head>
<body>
    
    <?Php

        $email = $_POST["email"];
        $Senha = $_POST["senha"];

        echo("EMAIL:  " . $email . "<br>" . "Senhar:  " . $Senha);
    ?>
</body>
</html>