<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instancias</title>
</head>
<body>  
    <?php
        //Referenciando outros Script
        require_once "atividade1.php";
        require_once "Bicicleta.php";
        //Instanciando As Classes
        $carro1 = new Carro();
        $moto1 = new Moto();
        $bicicleta1 = new Bicicleta();
        //Utilizando os Metodos
        $carro1 -> registrarVeiculo("xxx","Chevrolet","Onix","2025","Branco");
        $carro1 -> acelerar(90);
        
        $moto1 -> registrarVeiculo("xxx","Yamaha","MT-03","2018","Preto");
        $moto1 -> acelerar(100);

        $bicicleta1 -> registrarVeiculo("xxx","Caloi","Caloi Super C FT 7","1980","Vermelho");
        $bicicleta1 -> acelerar(46);

        //Printando os Resultados dos Objetos instanciando as Classes
        echo($carro1 -> exibirDetalhes());
        echo($moto1 -> exibirDetalhes());
        echo($bicicleta1 -> exibirDetalhes());
    ?>
</body>
</html>