<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //Variavel $nome recebe valor 'Fulano'
        $nome = Fulano;
        //Se a variavel $nome for
        switch($nome){
            //Caso 1
            case"Fulano":
                echo("E ai Fulano"); //IMPRIMA
                break; //ENCERRA
            //Caso 2
            case"Citrano":
                echo("E ai Citrano");
                break;
            //Caso 3
            case"Beltrano":
                echo("E ai Beltrano");
                break;
            //Mensagem Padrão
            default:
                echo("Qual é seu nome");
                break;
        }
    ?>
</body>
</html>
