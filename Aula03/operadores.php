<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $a = 1; //Variavel $a igual a 1
        $a += 2; //Somando 2 ao valor de $a
        echo $a ."<br>";

        $b = 1;
        $b -= 2; //Subitraindo 2 ao valor da variavel $b
        echo $b ."<br>";

        $c = 1;
        $c *= 2; //Multiplicando o valor da variavel $c por 2
        echo $c ."<br>";
        
        $d = 1;
        $d /= 2; //Dividindo o valor da varaivel $d por 2
        echo $d ."<br>";

        $e = 1;
        echo ++$e ."<br>"; //Incrementamos 1 e retornarmos o valor
        echo $e++ ."<br>"; //Retornamos o valor e incrementamos 1
        echo --$e ."<br>"; //Decrementamos 1 e retornamos o valor
        echo $e-- ."<br>"; //Retornamos o valor e decretamos 1
    ?>
</body>
</html>