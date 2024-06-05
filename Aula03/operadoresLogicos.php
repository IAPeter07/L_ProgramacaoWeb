<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $a = 1;
        $b = 1;
        $c = "Léo";
        $d = "Léo";

        $e = 3;

        //Igual: ==
        $a == $b; //Retorna TRUE

        //Identico: === (verfica os tipos das variaveis)
        $a === $b; //Retorna TRUE
        $a === $c; //Retorna FALSE

        //Não-Identico: !== (verfica os tipos das variaveis)
        $a !== $b; //Retorna FALSE
        $c !== $a; //Retorna TRUE

        //Diferente de: != ou <>
        $a != $c; //Retorna TRUE
        $a <> $b; //Retorna FALSE 

        //Menor que: <
        $a < $b; //Retorna FALSE
        $a < $e; //Retorna TRUE
        $e < $a; //Retorna FALSE

        //Maior que: >
        $b < $a; //Retorna FALSE
        $e < $a; //Retorna TRUE

        //Menor igual que: <=
        $a <= $b; //Retorna TRUE
        $a <= $e; //Retorna TRUE

        //Maior igual que: >=
        $a >= $b; //Retorna TRUE
        $a >= $e; //Retorna FALSE 

    ?>
</body>
</html>