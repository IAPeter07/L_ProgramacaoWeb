<?php 
    #Criação de uma Array  
    $produtos = [
        "Maça" => 1.99,
        "Uva" => 7.99,
        "Laranja" => 2.49];
    #Exibir os preços da lista
    echo "lista preços:<br>";
    foreach($produtos as $produto => $preco)
    {
        echo $produto." custa R$".$preco."<br>";
    }

    #Calculndo o total
    $total = 0;
    foreach ($produtos as $preco)
    {
        $total += $preco;
        echo "Total: R$".$total."<br>";
    }
?>