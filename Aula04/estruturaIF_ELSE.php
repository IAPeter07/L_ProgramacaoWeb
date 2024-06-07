<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        //Variavel idade recebe valor '17'
        $idade = 17;
        //SE a variavel ($idade) forr igual a '17'
        if($idade < 18){
            //IMPRIMA
            echo("Vc não pode entrar");
        }
        //SE NÂO..
        else{
            //IMPRIMA
            echo("Seja Bem-vindo(a)");
        }
    
        $idade = 23;
        $identidade = true;
        //SE a variavel ($idade) for maior que '18' E a variavel($identidade) For'VERDADEIRA'
        if ($idade > 18 && $identidade == true){
            //IMPRIMA
            echo("Seja Bem-vindo");
        }
        //SE NÂO..
        else{
            //IMPRIMA
            echo("Vc não pode entrar");
        }
    ?>
</body>
</html>
