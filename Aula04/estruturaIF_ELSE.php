<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $idade = 17;
        if($idade < 18){
            echo("Vc não pode entrar");
        }
        else{
            echo("Seja Bem-vindo(a)");
        }
    
        $idade = 23;
        $identidade = true;
        if ($idade > 18 && $identidade == true){
            echo("Seja Bem-vindo");
        }
        else{
            echo("Vc não pode entrar");
        }
    ?>
</body>
</html>