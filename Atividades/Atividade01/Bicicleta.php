<?php
    //Referenciando outro Script
    require_once "atividade1.php";
    //Classe Filho 'Bicicleta'
    class Bicicleta extends Veiculo{
        //Função abstrata definida para Bicicleta
        function acelerar($km){
            $this-> velocidade += $km;
            echo("A Velocidade da sua Bicicleta é de: " . $this-> velocidade . "<br>");
            if($km> 45){
                echo("A Velocidade Maxima legalmente é de até 45 km/h <br><br>");
            }   
            else{
                echo("A Velocidade está aceitavel para uma Bicicleta <br><br>");
            }
        }
        #Função de Exibir os Detalhes do Veiculo
        public function exibirDetalhes(){
            echo("ID da Bicicleta: " . $this-> id . "<br>");
                echo("Marca: " . $this-> marca . "<br>");
                echo("Ano: " . $this-> ano . "<br>");
                echo("Cor: " . $this-> cor . "<br><br>"); 
        }
    }
?>