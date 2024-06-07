<?php
    //Variavel 'Hoje' recebe o valor 'Quarta'
    $hoje = "Quarta";
    //Se a variavel ($hoje) for igual á
    switch ($hoje){
        //Caso 1
        case "Segunda":
            echo("Hoje é Segunda-Feira");
            break;
        //Caso 2
        case "Terça":
            echo("Hoje é Terça-Feira");
            break;
        //Caso 3
        case"Quarta":
            echo("Hoje é Quarta-Feira");
            break;
        //Mensagem Padrão
        default:
            echo("Não é inicio de Semana");
    }
?>
