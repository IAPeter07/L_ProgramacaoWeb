<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nome = Fulano;
        switch($nome){
            case"Fulano":
                echo("E ai Fulano");
                break;
            case"Citrano":
                echo("E ai Citrano");
                break;
            case"Beltrano":
                echo("E ai Beltrano");
                break;
            default:
                echo("Qual é seu nome");
                break;
        }
    ?>
</body>
</html>