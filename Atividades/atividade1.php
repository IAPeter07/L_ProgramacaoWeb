<?php 
    //Classe Pai Abstrata 'Veiculo'
    abstract class Veiculo{
        //Propriedades
        protected $id;
        protected $velocidade = 0;
        public $cor;
        public $ano;
        public $marca;
        public $modelo;

        //Função Construtora
        function registrarVeiculo($id,$marca,$modelo,$ano,$cor){
            $this-> id = $id;
            $this->marca = $marca;
            $this->modelo = $modelo;
            $this->ano = $ano;
            $this->cor = $cor;
        }

        //Função Abstrata para definir nas classes filhas
        abstract function acelerar($velocidade);
    }

    #Classe Filho 'Carro'
    class Carro extends Veiculo{
        //Função abstrata definida para Carro
        function acelerar($km){
            $this-> velocidade += $km;
            echo("A Velocidade do Seu Carro é de: " . $this-> velocidade . "<br>");
            if($km> 100){
                echo("A Velocidade Maxima legalmente é de até 100 km/h <br><br>");
            }   
            else{
                echo("A Velocidade está aceitavel para um Carro <br><br>");
            }
        }
        #Função de Exibir os Detalhes do Veiculo
        public function exibirDetalhes(){
            echo("ID do Carro: " . $this-> id . "<br>");
            echo("Marca: " . $this-> marca . "<br>");
            echo("Ano: " . $this-> ano . "<br>");
            echo("Cor: " . $this-> cor . "<br><br>"); 
        }

    }
    #Classe Filho 'Moto'
    class Moto extends Veiculo{
        //Função abstrata definida para Moto
        function acelerar($km){
            $this-> velocidade += $km;
            echo("A Velocidade da sua Moto é de: " . $this-> velocidade . "<br>"); 
            if($km > 90){
                echo("A Velocidade Maxima legalmente é de até 100 km/h <br><br>");
            }   
            else{
                echo("A Velocidade está aceitavel para uma M <br><br>");
            }
        }
        #Função de Exibir os Detalhes do Veiculo
        public function exibirDetalhes(){  
            echo("ID da Moto: " . $this-> id . "<br>");
            echo("Marca: " . $this-> marca . "<br>");
            echo("Ano: " . $this-> ano . "<br>");
            echo("Cor: " . $this-> cor . "<br><br>");
        }
    }

    //Instanciando As Classes
    $carro1 = new Carro();
    $moto1 = new Moto();
    //Utilizando os Metodos
    $carro1 -> registrarVeiculo("xxx","Chevrolet","Onix","2025","Branco");
    $carro1 -> acelerar(90);
    
    $moto1 -> registrarVeiculo("xxx","Yamaha","MT-03","2018","Preto");
    $moto1 -> acelerar(100);

    //Printando os Resultados dos Objetos instanciando as Classes
    echo($carro1 -> exibirDetalhes());
    echo($moto1 -> exibirDetalhes());
?>
